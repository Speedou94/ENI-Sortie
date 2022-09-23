<?php

namespace App\Command;

use App\Entity\Campus;
use App\Entity\Event;
use App\Entity\Status;
use App\Repository\EventRepository;
use App\Repository\StatusRepository;
use Doctrine\ORM\EntityManagerInterface;

class AutoStatusCommands
{
    public function __construct(private EventRepository $eventRepository,
                                private StatusRepository $statusRepository,
                                private EntityManagerInterface $manager)
    {
    }

    /**
     * Met a jour les status des events en foonction de la date du moment.
     */
    public function autoUpdatedStatus(Campus $campus): void
    {
        $params = [Status::CREATE, Status::IN_PROGRESS, Status::OPEN, Status::CLOSE];
        $now = new \DateTimeImmutable();
        $events = $this->eventRepository->getActiveEvents($params, $campus);
        $statusInProgress = $this->statusRepository->findOneBy([
            'wording' => Status::IN_PROGRESS,
        ]);
        $statusPast = $this->statusRepository->findOneBy([
            'wording' => Status::PAST,
        ]);
        foreach ($events as $event) {
            $startTime = $event->getStartAt();
            $finishTimeEvent = $startTime->modify('+'.$event->getDuration().'minutes');
            if ($startTime < $now && $finishTimeEvent > $now) {
                $event->setStatus($statusInProgress);
            }
            if ($finishTimeEvent < $now) {
                $event->setStatus($statusPast);
            }
            $this->manager->persist($event);
        }

        $this->manager->flush();
    }

    /**
     * Vérifie automatiquement le nombre d'inscriptions sur chaque événement en status ouvert et clôturé.
     */
    public function verifyCheckRegistration(): void
    {
        $now = new \DateTimeImmutable();
        $params = [Status::OPEN, Status::CLOSE];
        $events = $this->eventRepository->getOpenAndCloseEvents($params);
        $statusClose = $this->statusRepository->findOneBy([
            'wording' => Status::CLOSE,
        ]);
        $statusOpen = $this->statusRepository->findOneBy([
            'wording' => Status::OPEN,
        ]);

        foreach ($events as $event) {
            $maxRegistration = $event[Event::SELECTED_EVENT]->getMaxPeople();
            $totalRegistration = $event[Event::TOTAL_USER_REGISTERED];

            // Si le nombre d'inscrits est égale au nombre de places disponible, alors le status passe en CLOSE
            if (($totalRegistration == $maxRegistration &&
                str_contains($event[Event::SELECTED_EVENT]->getStatus()->getWording(), Status::OPEN))
                || $event[Event::SELECTED_EVENT]->getDeadLineInscriptionAt() < $now) {
                $event[Event::SELECTED_EVENT]->setStatus($statusClose);
            }

            // Si le nombre d'inscrits est inférieur au nombre de places disponible, alors le status passe en OPEN
            if ($totalRegistration < $maxRegistration &&
                str_contains($event[Event::SELECTED_EVENT]->getStatus()->getWording(), Status::CLOSE)
                && $event[Event::SELECTED_EVENT]->getDeadLineInscriptionAt() > $now) {
                $event[Event::SELECTED_EVENT]->setStatus($statusOpen);
            }
            $this->manager->persist($event[Event::SELECTED_EVENT]);
        }
        $this->manager->flush();
    }
}
