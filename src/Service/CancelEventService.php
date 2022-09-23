<?php

namespace App\Service;

use App\Entity\Contact;
use App\Entity\Event;
use App\Repository\UserRepository;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class CancelEventService
{
    public function __construct(private MailService $mailService, private UserRepository $userRepository)
    {
    }

    /**
     * @throws TransportExceptionInterface
     */
    public function sendEmailToRegisteredUser(Event $event): void
    {
        $contact = new Contact();
        $registeredUsers = $this->userRepository->getEmails($event->getOrganizer());
        $from = $event->getOrganizer()->getEmail();
        $contact->setFirstName($event->getOrganizer()->getFirstName());
        $contact->setLastName($event->getOrganizer()->getLastName());
        $contact->setEmail($from);
        $contact->setSubject('Annulation de la sortie'.$event->getName());
        $contact->setMessage($event->getDescription());

        dump($from);
        foreach ($registeredUsers as $user) {
            $this->mailService->sendEmail($from, $user['email'], $contact->getSubject(), ['contact' => $contact]);
        }
        // $this->mailService->sendEmail($form,);
    }
}
