<?php

namespace ChicoRei\Packages\Cielo\Tests\ModelTest;

use ChicoRei\Packages\Cielo\Model\RecurrentTransaction;
use PHPUnit\Framework\TestCase;

class RecurrentTransactionTest extends TestCase
{
    /**
     * RecurrentTransaction Test Data
     * @return array
     */
    public static function getTestData()
    {
        return [
            'PaymentId' => 'PayID',
            'PaymentNumber' => 6,
            'TryNumber' => 5,
        ];
    }

    public function testToArray()
    {
        $recurrentTransaction = RecurrentTransaction::create(static::getTestData());
        $this->assertSame(static::getTestData(), $recurrentTransaction->toArray());
    }
}
