<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use Carbon\Carbon;
use ChicoRei\Packages\Cielo\Model\Address;
use ChicoRei\Packages\Cielo\Model\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    /**
     * Customer Test Data
     * @return array
     */
    public static function getTestData()
    {
        return [
            'Name' => 'Harry Potter',
            'Email' => 'hp@hogwarts.uk',
            'BirthDate' => '1980-07-31',
            'Identity' => '4242424242',
            'IdentityType' => 'CPF',
            'Address' => AddressTest::getTestData(),
            'DeliveryAddress' => AddressTest::getTestData(),
        ];
    }

    public function testToArray()
    {
        $customer = Customer::create(static::getTestData());
        $this->assertEquals(static::getTestData(), $customer->toArray());
    }

    public function testGetBirthDate()
    {
        $customer = Customer::create(static::getTestData());
        $this->assertInstanceOf(Carbon::class, $customer->getBirthDate());
    }

    public function testGetAddress()
    {
        $customer = Customer::create(static::getTestData());
        $this->assertInstanceOf(Address::class, $customer->getAddress());
    }

    public function testGetDeliveryAddress()
    {
        $customer = Customer::create(static::getTestData());
        $this->assertInstanceOf(Address::class, $customer->getDeliveryAddress());
        $this->assertNotSame($customer->getAddress(), $customer->getDeliveryAddress());
    }
}
