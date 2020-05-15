<?php

namespace ChicoRei\Packages\Cielo\Tests\ModelTest;

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
            'Method' => 'GET',
            'Rel' => 'self',
            'Href' => 'https://domain.com',
        ];
    }

    public function testToArray()
    {
        $link = Link::create(static::getTestData());
        $this->assertSame(static::getTestData(), $link->toArray());
    }
}
