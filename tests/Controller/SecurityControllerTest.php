<?php

namespace App\Tests\Controller;

use App\Controller\SecurityController;
use phpDocumentor\Reflection\Types\Static_;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{

    public function testLoginWithWrongCreditentials()
    {
        $client = static::createClient();
        $crawler = $client->request('GET','/');
        $form = $crawler->selectButton('Connexion')->form([
            'email'=> 'admin@admin.fr',
            'password'=>'mauvaisPassword'
        ]);
        $client->submit($form);
        $this->assertResponseRedirects('/');
        $client->followRedirect();
        $this->assertSelectorExists('.alert.alert-danger');
    }
    public function testLoginWithCorrectCreditentials()
    {
        $client = static::createClient();
//        $crawler = $client->request('GET','/');
//        $form = $crawler->selectButton('Connexion')->form([
//            'email'=> 'admin@admin.fr',
//            'password'=>'admin'
//        ])
//        $client->submit($form);
        $csrfToken = $client->getContainer()->get('security.csrf.token_manager')->getToken('authenticate');
        $client->request('POST','',[
            '_csrf_token'=>$csrfToken,
            'email'=> 'admin@admin.fr',
            'password'=>'admin'
        ]);
        $this->assertResponseRedirects('/event');
        $client->followRedirect();
        $this->assertSelectorTextContains('h2','Filtrer les sorties');
    }
}
