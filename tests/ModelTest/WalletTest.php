<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use ChicoRei\Packages\Cielo\Model\AdditionalData;
use ChicoRei\Packages\Cielo\Model\Wallet;
use PHPUnit\Framework\TestCase;

class WalletTest extends TestCase
{
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

    public function testToArray()
    {
        $wallet = Wallet::create(static::getTestData());
        $this->assertEquals(static::getTestData(), $wallet->toArray());
    }

    public function testGetAdditionalData()
    {
        $wallet = Wallet::create(static::getTestData());
        $this->assertInstanceOf(AdditionalData::class, $wallet->getAdditionalData());
    }
}
