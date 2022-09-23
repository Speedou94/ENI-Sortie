<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Status;
use App\Repository\StatusRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActiveEventController extends AbstractController
{
    #[Route('/event/active/{id}', name: 'app_active_event')]
    #[Security("is_granted('ROLE_USER') and user === event.getOrganizer()") ]
    public function active(Event $event, EntityManagerInterface $manager, StatusRepository $statusRepository): Response
    {
        $status = $event->getStatus()->getWording();
        if (str_contains(Status::CREATE, $status)) {
            $event->setStatus($statusRepository->findOneBy([
                'wording' => Status::OPEN,
            ]));
            $manager->persist($event);
            $manager->flush();
            $this->addFlash('success', 'Votre sortie est active');
        } else {
            $this->addFlash('failed', 'Operation non autorisé');
        }

        return $this->redirectToRoute('app_event_list');
    }
}
