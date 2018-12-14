<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use ChicoRei\Packages\Cielo\Model\AdditionalData;
use PHPUnit\Framework\TestCase;

class AdditionalDataTest extends TestCase
{
    /**
     * @var AdditionalData
     */
    private static $additionalData;

    /**
     * AdditionalData Test Data
     * @return array
     */
    public static function getTestData()
    {
        return [
            'EphemeralPublicKey' => 'EphemeralKeyTest',
            'Capturecode' => 'CaptureCodeTest',
        ];
    }

    public static function setUpBeforeClass()
    {
        static::$additionalData = AdditionalData::fromArray(static::getTestData());
    }

    public function testToArray()
    {
        $this->assertEquals(static::getTestData(), static::$additionalData->toArray());
    }
}
