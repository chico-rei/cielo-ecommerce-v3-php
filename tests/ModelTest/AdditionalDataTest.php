<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use ChicoRei\Packages\Cielo\Model\AdditionalData;
use PHPUnit\Framework\TestCase;

class AdditionalDataTest extends TestCase
{
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

    public function testToArray()
    {
        $additionalData = AdditionalData::create(static::getTestData());
        $this->assertEquals(static::getTestData(), $additionalData->toArray());
    }
}
