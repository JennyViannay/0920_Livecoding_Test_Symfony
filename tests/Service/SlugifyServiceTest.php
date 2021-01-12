<?php

namespace App\Tests\Service;

use App\Service\SlugifyService;
use PHPUnit\Framework\TestCase;

class SlugifyServiceTest extends TestCase
{
    /**
    * @dataProvider getSlugs
    */
    public function testSlugify(string $string, string $slug)
    {
        $this->assertSame($slug, SlugifyService::slugify($string));
    }

    public function getSlugs()
    {
        return [
            ['Lorem Ipsum', 'lorem-ipsum'],
            ['  Lorem Ipsum  ', 'lorem-ipsum'],
            [' lOrEm  iPsUm  ', 'lorem-ipsum'],
            ['!Lorem Ipsum!', 'lorem-ipsum'],
            ['lorem-ipsum', 'lorem-ipsum'],
        ];
    }
}
