<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use Carbon\Carbon;
use ChicoRei\Packages\Cielo\Model\Address;
use ChicoRei\Packages\Cielo\Model\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    /**
     * @var Customer
     */
    private static $customer;

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

    public static function setUpBeforeClass()
    {
        static::$customer = Customer::fromArray(static::getTestData());
    }

    public function testToArray()
    {
        $this->assertEquals(static::getTestData(), static::$customer->toArray());
    }

    public function testGetBirthDate()
    {
        $this->assertInstanceOf(Carbon::class, static::$customer->getBirthDate());
    }

    public function testGetAddress()
    {
        $this->assertInstanceOf(Address::class, static::$customer->getAddress());
    }

    public function testGetDeliveryAddress()
    {
        $this->assertInstanceOf(Address::class, static::$customer->getDeliveryAddress());
        $this->assertNotSame(static::$customer->getAddress(), static::$customer->getDeliveryAddress());
    }
}
