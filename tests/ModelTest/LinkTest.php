<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use ChicoRei\Packages\Cielo\Model\Link;
use PHPUnit\Framework\TestCase;

class LinkTest extends TestCase
{
    /**
     * Link Test Data
     * @return array
     */
    public static function getTestData()
    {
        return [
            'Href' => 'https://domain.com',
            'Rel' => 'self',
            'Method' => 'GET',
        ];
    }

    public function testToArray()
    {
        $link = Link::create(static::getTestData());
        $this->assertEquals(static::getTestData(), $link->toArray());
    }
}
