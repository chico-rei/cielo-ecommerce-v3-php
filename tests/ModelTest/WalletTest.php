<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use ChicoRei\Packages\Cielo\Model\AdditionalData;
use ChicoRei\Packages\Cielo\Model\Wallet;
use PHPUnit\Framework\TestCase;

class WalletTest extends TestCase
{
    /**
     * @var Wallet
     */
    private static $wallet;

    /**
     * Wallet Test Data
     * @return array
     */
    public static function getTestData()
    {
        return [
            'Type' => Wallet::TYPE_MASTERPASS,
            'WalletKey' => 'TestKey',
            'Eci' => 5,
            'Cavv' => 'TestCavv',
            'AdditionalData' => AdditionalDataTest::getTestData(),
        ];
    }

    public static function setUpBeforeClass()
    {
        static::$wallet = Wallet::fromArray(static::getTestData());
    }

    public function testToArray()
    {
        $this->assertEquals(static::getTestData(), static::$wallet->toArray());
    }

    public function testGetAdditionalData()
    {
        $this->assertInstanceOf(AdditionalData::class, static::$wallet->getAdditionalData());
    }
}
