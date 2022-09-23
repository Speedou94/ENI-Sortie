<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Event;
use App\Entity\Location;
use App\Entity\Status;
use App\Form\ContactType;
use App\Form\EventsListType;
use App\Form\EventType;
use App\Form\LocationType;
use App\Model\EventsFilterModel;
use App\Repository\EventRepository;
use App\Repository\UserRepository;
use App\Service\EventService;
use App\Service\MailService;
use App\Service\StatusServices;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    #[Route('/event', name: 'app_event_list', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function list(
        Request $request,
        EventRepository $eventRepository,
        UserRepository $userRepository,
        StatusServices $services
    ): Response {
        $user = $userRepository->findOneBy(['email' => $this->getUser()->getUserIdentifier()]);
        $services->verifyActiveStatus($user->getCampus());
        $data = new EventsFilterModel();

        $data->campus = $user->getCampus();
        $form = $this->createForm(EventsListType::class, $data);
        $form->handleRequest($request);
        $data = $form->getData();
        $events = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $events = $eventRepository->getEventList($data, $user);
        }

        return $this->render('event/lister.html.twig', [
            'events' => $events,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/event/new', name: 'app_event_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function create(Request $request,
                           UserRepository $userRepository,
                           EntityManagerInterface $manager,
                           EventService $service): Response
    {
        $user = $userRepository->findOneBy([
            'email' => $this->getUser()->getUserIdentifier(),
        ]);
        $title = 'Ajout d\'une nouvelle sortie';
        $idLocation = $request->request->getInt('location');
        $event = new Event();
        $event = $service->initFormNewEvent($event, $user);
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
        $location = new Location();
        $formLocation = $this->createForm(LocationType::class, $location);
        $formLocation->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $event = $form->getData();
            $event = $service->formIsValid($event, $idLocation, $user);
            $manager->persist($event);
            $manager->flush();
            $this->addFlash(
                'success', 'Votre sortie est enregistrer!'
            );

            return $this->redirectToRoute('app_event_edit', ['id' => $event->getId()]);
        }

        return $this->render('event/new_event.html.twig', [
             'form' => $form->createView(),
             'formLocation' => $formLocation->createView(),
             'edit' => false,
             'activate' => false,
             'idEvent' => null,
             'title' => $title,
         ]);
    }

    #[Route('/event/edit/{id}', name: 'app_event_edit', methods: ['GET', 'POST'])]
    #[Security("is_granted('ROLE_USER') and user === event.getOrganizer()")]
    public function edit(Event $event, EntityManagerInterface $manager, Request $request): Response
    {
        // Permet d'afficher le bouton d'activation de la sortie

        if (!str_contains(Status::CREATE, $event->getStatus()->getWording())) {
            $this->addFlash('failed', 'Modification impossible');

            return $this->redirectToRoute('app_event_list');
        }
        $title = 'Edition d\'une sortie';
        $location = new Location();
        $formLocation = $this->createForm(LocationType::class, $location);
        $formLocation->handleRequest($request);
        $campus = $event->getCampus();
        $form = $this->createForm(EventType::class, $event,
            ['event_city' => $event->getLocation()->getCity()->getName()]
        );
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $event = $form->getData();
            $event->setCampus($campus);
            $manager->persist($event);
            $manager->flush();
        }

        return $this->render('event/new_event.html.twig', [
            'form' => $form->createView(),
            'edit' => true,
            'idEvent' => $form->getData()->getId(),
            'activate' => true,
            'formLocation' => $formLocation->createView(),
            'title' => $title,
        ]);
    }

    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/event/details/{id}', name: 'app_event_details', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function detailEvent(Event $event, Request $request, MailService $mailService): Response
    {
        if ($event->getStartAt() < new \DateTimeImmutable('-1 month')) {
            $this->addFlash('failed', 'Sortie archivée, affichage impossible');

            return $this->redirectToRoute('app_event_list');
        }
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $contact = $form->getData();
            $contact->setSubject($event->getName());
            $contact->setEmail($this->getUser()->getUserIdentifier());
            $to = $request->request->get('email');
            $mailService->sendEmail($contact->getEmail(), $to, $contact->getSubject(), ['contact' => $contact]);
            $this->addFlash('success', 'Email envoyé');
        }

        return $this->render(view: 'event/details_event.html.twig', parameters: [
            'event' => $event,
            'form' => $form->createView(),
            ]);
    }

    #[Route('/event/subscribe/{id}', name: 'app_event_subscribe', methods: ['GET'])]
    #[Security('event.getRegistration().count() < event.getMaxPeople()')]
    public function subscribeEvent(Event $event, EntityManagerInterface $manager, UserRepository $userRepository): Response
    {
        if ($event->getDeadLineInscriptionAt() < new \DateTimeImmutable() ||
                            Status::OPEN != $event->getStatus()->getWording()) {
            $this->addFlash('failed', 'Les inscriptions pour cette sortie ne sont pas autorisées.');

            return $this->redirectToRoute('app_event_list');
        }
        $user = $userRepository->findOneBy(['email' => $this->getUser()->getUserIdentifier()]);
        $event->addRegistration($user);
        $manager->persist($event);
        $manager->flush();
        $this->addFlash(
            'success', 'Votre inscription est confirmée!'
        );

        return $this->redirectToRoute('app_event_list');
    }

    #[Route('/event/unsubscribe/{id}', name: 'app_event_unsubscribe', methods: ['GET'])]
    public function unsubscribeEvent(Event $event, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
        if (Status::OPEN != $event->getStatus()->getWording() &&
            Status::CLOSE != $event->getStatus()->getWording()) {
            $this->addFlash('failed', 'Impossible de se désincrire de cette sortie.');

            return $this->redirectToRoute('app_event_list');
        }
        $user = $userRepository->findOneBy(['email' => $this->getUser()->getUserIdentifier()]);
        $event->removeRegistration($user);
        $entityManager->persist($event);
        $entityManager->flush();
        $this->addFlash(
            'success', 'Votre inscription est annulée!'
        );

        return $this->redirectToRoute('app_event_list');
    }
}
