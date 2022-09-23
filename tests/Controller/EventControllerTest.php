<?php

namespace App\Tests\Controller;

use App\Controller\EventController;
use App\Entity\Campus;
use App\Repository\UserRepository;
use Faker\Factory;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Date;

class EventControllerTest extends WebTestCase
{

    public function testRedirectToLoginWhenAccessingToEventListWhenLoggedIn()
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneBy(['email'=>'admin@admin.fr']);
        $client->loginUser($testUser);
        $client->request('GET', "/event");
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
    public function testAddingNewEventSuccessfull(){
        $client = static::createClient();

        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneBy(['email'=>'admin@admin.fr']);
        $client->loginUser($testUser);

        $crawler = $client->request('GET', '/event/new');
        $submitButton = $crawler->selectButton('Valider');
        $form = $submitButton->form();
//        [
//            'form[name]'=> 'Nouvelle Sortie',
//            'form[campus]'=> 'SAINT-HERBLAIN',
//            'form[startAt]'=> new \DateTimeImmutable('+2 week'),
//            'form[deadLineInscriptionAt]'=> new \DateTimeImmutable('+1 week'),
//            'form[maxPeople]'=> 20,
//            'form[description]'=> 'Nouvelle Sortie description de feu',
//            'form[duration]'=> 150
//        ]);
        $form['event[name]'] = 'Nouvelle Sortie';
        $form['event[campus]'] = 1;
        $form['event[startAt]'] = '2022-09-21 20:20:20';
//        $form['event[deadLineInscriptionAt]'] = new \DateTimeImmutable('+1 week');
        $form['event[maxPeople]'] = 20;
        $form['event[description]'] = 'Nouvelle Sortie description de feu';
        $form['event[duration]'] = 150;

        $client->submit($form);

    }

}
