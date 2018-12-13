<?php

namespace ChicoRei\Packages\Cielo\Model;

use Carbon\Carbon;
use ChicoRei\Packages\Cielo\CieloObject;

class RecurrentPayment extends CieloObject
{
    /**
     * Recurrent Payment Interval Monthly
     */
    const INTERVAL_MONTHLY = 'Monthly';

    /**
     * Recurrent Payment Interval Bi Monthly
     */
    const INTERVAL_BIMONTHLY = 'Bimonthly';

    /**
     * Recurrent Payment Interval Quarterly
     */
    const INTERVAL_QUARTERLY = 'Quarterly';

    /**
     * Recurrent Payment Interval Semi Annual
     */
    const INTERVAL_SEMIANNUAL = 'SemiAnnual';

    /**
     * Recurrent Payment Interval Annual
     */
    const INTERVAL_ANNUAL = 'Annual';

    /**
     * Authorize Now
     *
     * @var null|bool
     */
    public $authorizeNow;

    /**
     * Recurrent Payment ID
     *
     * @var null|string
     */
    public $recurrentPaymentId;

    /**
     * Next Recurrency
     *
     * @var null|Carbon
     */
    public $nextRecurrency;

    /**
     * Start Date
     *
     * @var null|Carbon
     */
    public $startDate;

    /**
     * End Date
     *
     * @var null|Carbon
     */
    public $endDate;

    /**
     * Interval
     *
     * @var null|string
     */
    public $interval;

    /**
     * Amount
     *
     * @var null|int
     */
    public $amount;

    /**
     * Country
     *
     * @var null|string
     */
    public $country;

    /**
     * Create Date
     *
     * @var null|Carbon
     */
    public $createDate;

    /**
     * Currency
     *
     * @var null|string
     */
    public $currency;

    /**
     * Current Recurrency Try
     *
     * @var null|int
     */
    public $currentRecurrencyTry;

    /**
     * Provider
     *
     * @var null|string
     */
    public $provider;

    /**
     * Recurrency Day
     *
     * @var null|int
     */
    public $recurrencyDay;

    /**
     * Successful Recurrences
     *
     * @var null|int
     */
    public $successfulRecurrences;

    /**
     * Links
     *
     * @var null|Link[]
     */
    public $links;

    /**
     * Recurrent Transactions
     *
     * @var null|RecurrentTransaction[]
     */
    public $recurrentTransactions;

    /**
     * Reason Code
     *
     * @var null|int
     */
    public $reasonCode;

    /**
     * Reason Message
     *
     * @var null|string
     */
    public $reasonMessage;

    /**
     * Status
     *
     * @var null|int
     */
    public $status;

    /**
     * @param $array
     * @return static
     */
    public static function fromArray($array = [])
    {
        $nextRecurrency = $array['nextRecurrency'] ?? $array['NextRecurrency'] ?? null;
        $startDate = $array['startDate'] ?? $array['StartDate'] ?? null;
        $endDate = $array['endDate'] ?? $array['EndDate'] ?? null;
        $createDate = $array['createDate'] ?? $array['CreateDate'] ?? null;
        $links = $array['links'] ?? $array['Links'] ?? null;
        $recurrentTransactions = $array['recurrentTransactions'] ?? $array['RecurrentTransactions'] ?? null;

        $object = new static([
            'nextRecurrency' => isset($nextRecurrency) ? Carbon::parse($nextRecurrency) : null,
            'startDate' => isset($startDate) ? Carbon::parse($startDate) : null,
            'endDate' => isset($endDate) ? Carbon::parse($endDate) : null,
            'createDate' => isset($createDate) ? Carbon::parse($createDate) : null,
            'links' => isset($links) ? array_map(function ($newLink) {
                return Link::fromArray($newLink);
            }, $links) : null,
            'recurrentTransactions' => isset($recurrentTransactions) ? array_map(function ($newTransaction) {
                return RecurrentTransaction::fromArray($newTransaction);
            }, $recurrentTransactions) : null,
        ]);

        return $object->fill($array, false);
    }

    /**
     * @return bool|null
     */
    public function getAuthorizeNow(): ?bool
    {
        return $this->authorizeNow;
    }

    /**
     * @param bool|null $authorizeNow
     * @return RecurrentPayment
     */
    public function setAuthorizeNow(?bool $authorizeNow): RecurrentPayment
    {
        $this->authorizeNow = $authorizeNow;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRecurrentPaymentId(): ?string
    {
        return $this->recurrentPaymentId;
    }

    /**
     * @param null|string $recurrentPaymentId
     * @return RecurrentPayment
     */
    public function setRecurrentPaymentId(?string $recurrentPaymentId): RecurrentPayment
    {
        $this->recurrentPaymentId = $recurrentPaymentId;
        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getNextRecurrency(): ?Carbon
    {
        return $this->nextRecurrency;
    }

    /**
     * @param Carbon|null $nextRecurrency
     * @return RecurrentPayment
     */
    public function setNextRecurrency(?Carbon $nextRecurrency): RecurrentPayment
    {
        $this->nextRecurrency = $nextRecurrency;
        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getStartDate(): ?Carbon
    {
        return $this->startDate;
    }

    /**
     * @param Carbon|null $startDate
     * @return RecurrentPayment
     */
    public function setStartDate(?Carbon $startDate): RecurrentPayment
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getEndDate(): ?Carbon
    {
        return $this->endDate;
    }

    /**
     * @param Carbon|null $endDate
     * @return RecurrentPayment
     */
    public function setEndDate(?Carbon $endDate): RecurrentPayment
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }

    /**
     * @param null|string $interval
     * @return RecurrentPayment
     */
    public function setInterval(?string $interval): RecurrentPayment
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $amount
     * @return RecurrentPayment
     */
    public function setAmount(?int $amount): RecurrentPayment
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param null|string $country
     * @return RecurrentPayment
     */
    public function setCountry(?string $country): RecurrentPayment
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getCreateDate(): ?Carbon
    {
        return $this->createDate;
    }

    /**
     * @param Carbon|null $createDate
     * @return RecurrentPayment
     */
    public function setCreateDate(?Carbon $createDate): RecurrentPayment
    {
        $this->createDate = $createDate;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param null|string $currency
     * @return RecurrentPayment
     */
    public function setCurrency(?string $currency): RecurrentPayment
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCurrentRecurrencyTry(): ?int
    {
        return $this->currentRecurrencyTry;
    }

    /**
     * @param int|null $currentRecurrencyTry
     * @return RecurrentPayment
     */
    public function setCurrentRecurrencyTry(?int $currentRecurrencyTry): RecurrentPayment
    {
        $this->currentRecurrencyTry = $currentRecurrencyTry;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getProvider(): ?string
    {
        return $this->provider;
    }

    /**
     * @param null|string $provider
     * @return RecurrentPayment
     */
    public function setProvider(?string $provider): RecurrentPayment
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRecurrencyDay(): ?int
    {
        return $this->recurrencyDay;
    }

    /**
     * @param int|null $recurrencyDay
     * @return RecurrentPayment
     */
    public function setRecurrencyDay(?int $recurrencyDay): RecurrentPayment
    {
        $this->recurrencyDay = $recurrencyDay;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSuccessfulRecurrences(): ?int
    {
        return $this->successfulRecurrences;
    }

    /**
     * @param int|null $successfulRecurrences
     * @return RecurrentPayment
     */
    public function setSuccessfulRecurrences(?int $successfulRecurrences): RecurrentPayment
    {
        $this->successfulRecurrences = $successfulRecurrences;
        return $this;
    }

    /**
     * @return Link[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * @param Link[]|null $links
     * @return RecurrentPayment
     */
    public function setLinks(?array $links): RecurrentPayment
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @return RecurrentTransaction[]|null
     */
    public function getRecurrentTransactions(): ?array
    {
        return $this->recurrentTransactions;
    }

    /**
     * @param RecurrentTransaction[]|null $recurrentTransactions
     * @return RecurrentPayment
     */
    public function setRecurrentTransactions(?array $recurrentTransactions): RecurrentPayment
    {
        $this->recurrentTransactions = $recurrentTransactions;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getReasonCode(): ?int
    {
        return $this->reasonCode;
    }

    /**
     * @param int|null $reasonCode
     * @return RecurrentPayment
     */
    public function setReasonCode(?int $reasonCode): RecurrentPayment
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getReasonMessage(): ?string
    {
        return $this->reasonMessage;
    }

    /**
     * @param null|string $reasonMessage
     * @return RecurrentPayment
     */
    public function setReasonMessage(?string $reasonMessage): RecurrentPayment
    {
        $this->reasonMessage = $reasonMessage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int|null $status
     * @return RecurrentPayment
     */
    public function setStatus(?int $status): RecurrentPayment
    {
        $this->status = $status;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'AuthorizeNow' => $this->getAuthorizeNow(),
            'RecurrentPaymentId' => $this->getRecurrentPaymentId(),
            'NextRecurrency' => isset($this->nextRecurrency) ? $this->getNextRecurrency()->format('Y-m-d') : null,
            'StartDate' => isset($this->startDate) ? $this->getStartDate()->format('Y-m-d') : null,
            'EndDate' => isset($this->endDate) ? $this->getEndDate()->format('Y-m-d') : null,
            'Interval' => $this->getInterval(),
            'Amount' => $this->getAmount(),
            'Country' => $this->getCountry(),
            'CreateDate' => isset($this->createDate) ? $this->getCreateDate()->format('Y-m-dTH:i:s') : null,
            'Currency' => $this->getCurrency(),
            'CurrentRecurrencyTry' => $this->getCurrentRecurrencyTry(),
            'Provider' => $this->getProvider(),
            'RecurrencyDay' => $this->getRecurrencyDay(),
            'SuccessfulRecurrences' => $this->getSuccessfulRecurrences(),
            'Links' => isset($this->links) ? array_map(function (Link $newLink) {
                return $newLink->toArray();
            }, $this->getLinks()) : null,
            'RecurrentTransactions' => isset($this->recurrentTransactions) ?
                array_map(function (RecurrentTransaction $recurrentTransaction) {
                    return $recurrentTransaction->toArray();
                }, $this->getRecurrentTransactions()) : null,
            'ReasonCode' => $this->getReasonCode(),
            'ReasonMessage' => $this->getReasonMessage(),
            'Status' => $this->getStatus(),
        ];
    }
}
