<?php

namespace App\Tests\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class PageControllerTest extends WebTestCase
{
    public function testRedirectToLoginWhenAccessingToEventListWhenNotLoggedIn()
    {
        $client = static::createClient();
        $client->request('GET', "/event");
        $this->assertResponseRedirects('/');
    }
    public function testRedirectToLoginWhenAccessingToEventListWhenLoggedIn()
    {
        $client = static::createClient();
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findOneBy(['email'=>'admin@admin.fr']);
        $client->loginUser($testUser);
        $client->request('GET', "/event");
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
}
