<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use ChicoRei\Packages\Cielo\Model\Link;
use PHPUnit\Framework\TestCase;

class LinkTest extends TestCase
{
    /**
     * @var Link
     */
    private static $link;

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

    public static function setUpBeforeClass()
    {
        static::$link = Link::fromArray(static::getTestData());
    }

    public function testToArray()
    {
        $this->assertEquals(static::getTestData(), static::$link->toArray());
    }
}
