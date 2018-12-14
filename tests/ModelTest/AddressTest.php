<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use ChicoRei\Packages\Cielo\Model\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    /**
     * @var Address
     */
    private static $address;

    /**
     * Address Test Data
     * @return array
     */
    public static function getTestData()
    {
        return [
            'Street' => 'Rua Jorge Fayer',
            'Number' => '55',
            'Complement' => 'ChicoRei',
            'ZipCode' => '36038090',
            'City' => 'Juiz de Fora',
            'State' => 'Minas Gerais',
            'Country' => 'BRA',
            'District' => 'Santos Dummont',
        ];
    }

    public static function setUpBeforeClass()
    {
        static::$address = Address::fromArray(static::getTestData());
    }

    public function testToArray()
    {
        $this->assertEquals(static::getTestData(), static::$address->toArray());
    }
}
