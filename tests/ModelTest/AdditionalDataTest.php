<?php

namespace ChicoRei\Packages\Cielo\Tests\ModelTest;

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
            'CaptureCode' => 'CaptureCodeTest',
            'Signature' => 'Signature',
        ];
    }

    public function testToArray()
    {
        $additionalData = AdditionalData::create(static::getTestData());
        $this->assertSame(static::getTestData(), $additionalData->toArray());
    }
}
