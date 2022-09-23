<?php

namespace App\DataFixtures;

use App\Entity\Campus;
use App\Entity\City;
use App\Entity\Event;
use App\Entity\Location;
use App\Entity\Status;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        // version "realiste" des noms de sortie
        $eventNames = ['Sortie piscine', 'Aller boire un verre', 'Faire de l\'escalade', 'Soiree jeux de societé',
            'Boire un cafe', 'Apprendre la couture', 'Cours de Yoga', 'Decouverte de JAVA', 'Developper une webapp',
            'Comprendre C++', 'Utiliser un framework Javascript', 'Detente au sona', 'Rando roller', 'Journee alpinisme',
            'Soiree billard', 'Soiree bowling', 'Exposition de photo', 'Soiree biere foot', 'Rencontre cinema de montagne',
            'Rasso tunnig et run du vendredi', ];
        // version "realiste" des lieux de sortie
        $locationName = ['Piscine des bains', 'Barberousse', 'Mur de l\'angoisse', 'Cafe des jeux', 'Central perk', 'Singer institut', 'Parc Paul Mistral',
            'Campus ENI', 'En ligne sur teams', 'Poly-technique', 'En ligne sur OCR', 'Au bains douches', 'Grand boulevard', 'Mont aiguille',
            'Au 109', 'Bowling center', 'Musée du quai Branly', 'Au PMU de nogent', 'Palais des sport', 'MacDo de Villejuif', ];

        // Creation des campus
        $allCampus = [];
        $allCampusName = ['SAINT-HERBLAIN', 'CHARTRES DE BRETAGNE', 'LA ROCHE SUR YON'];

        foreach ($allCampusName as $name) {
            $campus = new Campus();
            $campus->setName($name);
            $allCampus[] = $campus;
            $manager->persist($campus);
        }
        // Creation des villes
        $citys = [];
        for ($i = 0; $i < 10; ++$i) {
            $city = new City();
            $city->setName($this->faker->city());
            $city->setZipCode($this->faker->postcode());
            $citys[] = $city;
            $manager->persist($city);
        }
        // Creation des Etats des sorties
        $status = [];
        $allState = [Status::CREATE, Status::OPEN, Status::IN_PROGRESS, Status::CLOSE, Status::PAST, Status::CANCELED];
        foreach ($allState as $wording) {
            $statu = new Status();
            $statu->setWording($wording);
            $status[] = $statu;
            $manager->persist($statu);
        }
        // Creation des lieux
        $locations = [];
        for ($i = 0; $i < 20; ++$i) {
            $location = new Location();
            $location->setName($locationName[$i])
            ->setLongitude($this->faker->longitude(0, 7))
            ->setLatitude($this->faker->latitude(45, 50))
            ->setCity($citys[mt_rand(0, count($citys) - 1)])
            ->setStreet($this->faker->streetName());
            $locations[] = $location;
            $manager->persist($location);
        }
        // Creation de l 'admin
        $admin = new User();
        $admin->setFirstName('admin')
            ->setLastName('admin')
            ->setEmail('admin@admin.fr')
            ->setCampus($allCampus[mt_rand(0, count($allCampus) - 1)])
            ->setIsAdmin(true)
            ->setIsActive(true)
            ->setPseudo('SuperTOTO')
            ->setPhoneNumber('0606060606');
        $admin->setPlainPassword('admin');
        $manager->persist($admin);
        // Creation des users
        $users = [];
        for ($i = 0; $i < 10; ++$i) {
            $user = new User();
            $user->setFirstName($this->faker->firstName())
                ->setLastName($this->faker->lastName())
                ->setEmail($this->faker->email())
                ->setCampus($allCampus[mt_rand(0, count($allCampus) - 1)])
                ->setPseudo($this->faker->userName());
            $user->setPlainPassword('password');
            $users[] = $user;
            $manager->persist($user);
        }

        $coach = new User();
        $coach->setFirstName('Phillipe')
            ->setLastName('ENI')
            ->setEmail('pmontembault@campus-eni.fr')
            ->setCampus($allCampus[mt_rand(0, count($allCampus) - 1)])
            ->setIsAdmin(true)
            ->setIsActive(true)
            ->setPseudo('CoachEniPhp')
            ->setPhoneNumber('0606060606');
        $coach->setPlainPassword('totototo');
        $users[] = $coach;
        $manager->persist($coach);
        // Creation des users inactifs
        for ($i = 0; $i < 5; ++$i) {
            $unactiveUser = new User();
            $unactiveUser->setFirstName($this->faker->firstName())
                ->setLastName($this->faker->lastName())
                ->setEmail($this->faker->email())
                ->setCampus($allCampus[mt_rand(0, count($allCampus) - 1)])
                ->setPseudo($this->faker->userName())
                ->setIsActive(false);
            $unactiveUser->setPlainPassword('password');
            // $users[] = $unactiveUser;
            $manager->persist($unactiveUser);
        }
        // Creation des sorties
        $events = [];
        for ($i = 0; $i < 20; ++$i) {
            $event = new Event();
            $dateStartAt = \DateTimeImmutable::createFromMutable($this->faker->dateTimeBetween('-1 week', '+3 week', 'Europe/Paris'));
            $dateDeadLine = $dateStartAt->modify('-3 days');
            $event->setName($eventNames[$i])
                ->setStartAt($dateStartAt)
                ->setDeadLineInscriptionAt($dateDeadLine)
                ->setCampus($allCampus[mt_rand(0, count($allCampus) - 1)])
                ->setOrganizer($users[mt_rand(0, count($users) - 1)])
                ->setDuration(mt_rand(10, 180))
                ->setMaxPeople(mt_rand(5, 49))
                ->setLocation($locations[$i])
                ->setDescription($this->faker->text(75));
            if ($dateStartAt < new \DateTimeImmutable()) {
                $event->setStatus($status[4]);
            } else {
                if ($dateDeadLine < new \DateTimeImmutable()) {
                    $event->setStatus($status[3]);
                } else {
                    $event->setStatus($status[mt_rand(1, 2)]);
                }
            }
            $events[] = $event;
            $manager->persist($event);
        }
        // Creation des inscriptions aux sorties
        foreach ($events as $event) {
            for ($i = 0; $i < count($users) - 1; ++$i) {
                $event->addRegistration($users[mt_rand(0, count($users) - 1)]);
                $manager->persist($event);
            }
        }

        $manager->flush();
    }
}
