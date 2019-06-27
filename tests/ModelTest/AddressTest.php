<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use ChicoRei\Packages\Cielo\Model\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
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

    public function testToArray()
    {
        $address = Address::create(static::getTestData());
        $this->assertEquals(static::getTestData(), $address->toArray());
    }
}
