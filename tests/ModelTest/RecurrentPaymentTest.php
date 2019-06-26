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

    public function testToArray()
    {
        $recurrentPayment = RecurrentPayment::fromArray(static::getTestData());
        $this->assertEquals(static::getTestData(), $recurrentPayment->toArray());
    }

    public function testGetNextRecurrency()
    {
        $recurrentPayment = RecurrentPayment::fromArray(static::getTestData());
        $this->assertInstanceOf(Carbon::class, $recurrentPayment->getNextRecurrency());
    }

    public function testGetStartDate()
    {
        $recurrentPayment = RecurrentPayment::fromArray(static::getTestData());
        $this->assertInstanceOf(Carbon::class, $recurrentPayment->getStartDate());
    }

    public function testGetEndDate()
    {
        $recurrentPayment = RecurrentPayment::fromArray(static::getTestData());
        $this->assertInstanceOf(Carbon::class, $recurrentPayment->getEndDate());
    }

    public function testGetCreateDate()
    {
        $recurrentPayment = RecurrentPayment::fromArray(static::getTestData());
        $this->assertInstanceOf(Carbon::class, $recurrentPayment->getCreateDate());
    }

    public function testGetLinks()
    {
        $recurrentPayment = RecurrentPayment::fromArray(static::getTestData());
        $this->assertInternalType('array', $recurrentPayment->getLinks());
        $this->assertCount(2, $recurrentPayment->getLinks());

        foreach ($recurrentPayment->getLinks() as $link) {
            $this->assertInstanceOf(Link::class, $link);
        }
    }

    public function testGetRecurrentTransactions()
    {
        $recurrentPayment = RecurrentPayment::fromArray(static::getTestData());
        $this->assertInternalType('array', $recurrentPayment->getRecurrentTransactions());
        $this->assertCount(2, $recurrentPayment->getRecurrentTransactions());

        foreach ($recurrentPayment->getRecurrentTransactions() as $recurrentTransactions) {
            $this->assertInstanceOf(RecurrentTransaction::class, $recurrentTransactions);
        }
    }
}
