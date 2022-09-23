<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserModificationType;
use App\Form\UserPasswordType;
use App\Repository\CampusRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user/edit/{id}', name: 'app_user_edit', methods: ['GET', 'POST'])]
    #[Security("is_granted('ROLE_USER') and user === currentUser")]
    public function edit(User $currentUser, Request $request, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(UserModificationType::class, $currentUser);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $currentUser = $form->getData();
            $manager->persist($currentUser);
            $manager->flush();
            $this->addFlash(
                'success', 'Votre profil a été modifié avec succès!'
            );

            return $this->redirectToRoute('app_user_edit', ['id' => $currentUser->getId()]);
        }

        return $this->render('user/edit.html.twig',
            ['form' => $form->createView()]);
    }

    #[Route('/user/edit-password/{id}', name: 'app_user_edit-password', methods: ['GET', 'POST'])]
    #[Security("is_granted('ROLE_USER') and user === currentUser")]
    public function editPassword(User $currentUser,
                                 Request $request,
                                 UserPasswordHasherInterface $hasher,
                                 EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(UserPasswordType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($hasher->isPasswordValid($currentUser, $form->getData()['plainPassword'])) {
                $currentUser->setUpdatedAt(new \DateTimeImmutable());
                $currentUser->setPlainPassword($form->getData()['newPassword']);
                $manager->persist($currentUser);
                $manager->flush();
                $this->addFlash(
                    'success', 'Votre mot de passe a été modifié avec succès!'
                );

                return $this->redirectToRoute('app_user_edit', ['id' => $currentUser->getId()]);
            } else {
                $this->addFlash(
                    'failed', 'Le mot de passe est invalide!');
            }
        }

        return $this->render('user/edit_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/user/profil/{id}', name: 'app_user_profil', methods: ['GET'])]
    public function showProfilUser(User $user): Response
    {
        return $this->render('user/profil.html.twig', parameters: [
                    'user' => $user,
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/user/uploadCsv', name: 'app_user_upload_csv', methods: ['GET', 'POST'])]
    public function uploadCsv(
        Request $request,
        UserRepository $userRepository,
        CampusRepository $campusRepository,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager): Response
    {
        $file = $request->files->get('csvFile');
        if (isset($file)) {
            try {
                $handle = fopen($file, 'r');
                $lineNumber = 1;
                while (($raw_string = fgets($handle)) !== false) {
                    $row = str_getcsv($raw_string);
                    if (1 != $lineNumber) {
                        $user = $userRepository->findOneBy(['email' => $row[2]]);
                        if (!$user) {
                            $user = new user();
                            $user->setCampus($campusRepository->findOneBy(['id' => $row[1]]))
                                ->setEmail($row[2])
                                ->setPassword($userPasswordHasher->hashPassword($user, 'password'))
                                ->setLastName($row[5])
                                ->setFirstName($row[6])
                                ->setPseudo($row[7])
                                ->setPhoneNumber($row[8])
                                ->setIsActive(true)
                                ->setIsAdmin(true);
                            $entityManager->persist($user);
                        }
                    }
                    ++$lineNumber;
                }
                $entityManager->flush();
                fclose($handle);
                $this->addFlash(
                    'success', 'Votre fichier a été chargé avec succès!'
                );
            } catch (\Exception $e) {
                $this->addFlash(
                    'failed', 'Erreur lors du chargement du fichier!'
                );
            } finally {
                return $this->redirectToRoute('admin');
            }
        }

        return $this->render('user/uploadCsv.html.twig');
    }
}
