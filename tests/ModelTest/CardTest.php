<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use ChicoRei\Packages\Cielo\Model\Card;
use PHPUnit\Framework\TestCase;

class CardTest extends TestCase
{
    /**
     * @var Card
     */
    private static $card;

    /**
     * Card Test Data
     * @return array
     */
    public static function getTestData()
    {
        return [
            'CardNumber' => '4532117080573700',
            'Holder' => 'Harry Potter',
            'ExpirationDate' => '12/2030',
            'SecurityCode' => '123',
            'SaveCard' => true,
            'Brand' => CARD::BRAND_MASTERCARD,
            'CardToken' => 'TokenTest',
            'CustomerName' => 'Potter',
        ];
    }

    public static function setUpBeforeClass()
    {
        static::$card = Card::fromArray(static::getTestData());
    }

    public function testToArray()
    {
        $this->assertEquals(static::getTestData(), static::$card->toArray());
    }
}
