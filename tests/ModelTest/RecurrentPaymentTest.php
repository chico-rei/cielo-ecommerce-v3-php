<?php

namespace ChicoRei\Packages\Cielo\Tests\Model;

use Carbon\Carbon;
use ChicoRei\Packages\Cielo\Model\Link;
use ChicoRei\Packages\Cielo\Model\Payment;
use ChicoRei\Packages\Cielo\Model\RecurrentPayment;
use ChicoRei\Packages\Cielo\Model\RecurrentTransaction;
use PHPUnit\Framework\TestCase;

class RecurrentPaymentTest extends TestCase
{
    /**
     * @var RecurrentPayment
     */
    private static $recurrentPayment;

    /**
     * RecurrentPayment Test Data
     * @return array
     */
    public static function getTestData()
    {
        return [
            'AuthorizeNow' => true,
            'RecurrentPaymentId' => 'c30f5c78-fca2-459c-9f3c-9c4b41b09048',
            'NextRecurrency' => '2019-01-01',
            'StartDate' => '2018-12-01',
            'EndDate' => '2019-03-01',
            'Interval' => RecurrentPayment::INTERVAL_MONTHLY,
            'Amount' => 4200,
            'Country' => 'BRA',
            'CreateDate' => '2018-12-01T00:00:00',
            'Currency' => 'BRL',
            'CurrentRecurrencyTry' => 1,
            'Provider' => Payment::PROVIDER_SIMULADO,
            'RecurrencyDay' =>1,
            'SuccessfulRecurrences' => 0,
            'Links' => [
                LinkTest::getTestData(),
                LinkTest::getTestData(),
            ],
            'RecurrentTransactions' => [
                RecurrentTransactionTest::getTestData(),
                RecurrentTransactionTest::getTestData(),
            ],
            'ReasonCode' => 7,
            'ReasonMessage' => 'Denied',
            'Status' => 200,
        ];
    }

    public static function setUpBeforeClass()
    {
        static::$recurrentPayment = RecurrentPayment::fromArray(static::getTestData());
    }

    public function testToArray()
    {
        $this->assertEquals(static::getTestData(), static::$recurrentPayment->toArray());
    }

    public function testGetNextRecurrency()
    {
        $this->assertInstanceOf(Carbon::class, static::$recurrentPayment->getNextRecurrency());
    }

    public function testGetStartDate()
    {
        $this->assertInstanceOf(Carbon::class, static::$recurrentPayment->getStartDate());
    }

    public function testGetEndDate()
    {
        $this->assertInstanceOf(Carbon::class, static::$recurrentPayment->getEndDate());
    }

    public function testGetCreateDate()
    {
        $this->assertInstanceOf(Carbon::class, static::$recurrentPayment->getCreateDate());
    }

    public function testGetLinks()
    {
        $this->assertInternalType('array', static::$recurrentPayment->getLinks());
        $this->assertCount(2, static::$recurrentPayment->getLinks());

        foreach (static::$recurrentPayment->getLinks() as $link) {
            $this->assertInstanceOf(Link::class, $link);
        }
    }

    public function testGetRecurrentTransactions()
    {
        $this->assertInternalType('array', static::$recurrentPayment->getRecurrentTransactions());
        $this->assertCount(2, static::$recurrentPayment->getRecurrentTransactions());

        foreach (static::$recurrentPayment->getRecurrentTransactions() as $recurrentTransactions) {
            $this->assertInstanceOf(RecurrentTransaction::class, $recurrentTransactions);
        }
    }
}
