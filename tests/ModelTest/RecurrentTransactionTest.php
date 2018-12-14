<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use ChicoRei\Packages\Cielo\Model\RecurrentTransaction;
use PHPUnit\Framework\TestCase;

class RecurrentTransactionTest extends TestCase
{
    /**
     * @var RecurrentTransaction
     */
    private static $recurrentTransaction;

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

    public static function setUpBeforeClass()
    {
        static::$recurrentTransaction = RecurrentTransaction::fromArray(static::getTestData());
    }

    public function testToArray()
    {
        $this->assertEquals(static::getTestData(), static::$recurrentTransaction->toArray());
    }
}
