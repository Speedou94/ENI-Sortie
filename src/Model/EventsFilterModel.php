<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class EventsFilterModel
{
    #[ORM\Column(type: 'string')]
    public $campus = '';

    #[ORM\Column(type: 'string')]
    public $searchBar = '';

    #[ORM\Column(type: 'datetime')]
    #[Assert\GreaterThan(
        new \DateTimeImmutable('-1 month'),
        message : "Vous ne pouvez pas consulter les sorties de plus d'1 mois"
    )]
    public $minDate;

    #[ORM\Column(type: 'datetime')]
    #[Assert\GreaterThanOrEqual(propertyPath: 'minDate', message: 'Cette date doit être supérieure ou égale à la date de début')]
    public $maxDate;

    #[ORM\Column(type: 'boolean')]
    public ?bool $isOrganizer = true;

    #[ORM\Column(type: 'boolean')]
    public ?bool $isRegistred = true;

    #[ORM\Column(type: 'boolean')]
    public ?bool $isNotRegistred = false;

    #[ORM\Column(type: 'boolean')]
    public ?bool $isPassed = false;
}
