<?php

namespace App\Tests\Routes;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultRoutesTest extends WebTestCase
{
    /**
    * @dataProvider urlProvider
    */
    public function testDefaultRouteSuccessful($url) 
    {
        $client = self::createClient();
        $client->request('GET', $url);
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function urlProvider()
    {
        return [
            ['/'],
            ['/contact'],
            ['/about'],
            ['/articles']
        ];
    }
}