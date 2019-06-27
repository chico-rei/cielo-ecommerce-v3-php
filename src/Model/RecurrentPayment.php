<?php

namespace ChicoRei\Packages\Cielo\Model;

use Carbon\Carbon;
use ChicoRei\Packages\Cielo\CieloObject;
use InvalidArgumentException;

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
     * @var bool|null
     */
    public $authorizeNow;

    /**
     * Recurrent Payment ID
     *
     * @var string|null
     */
    public $recurrentPaymentId;

    /**
     * Next Recurrency
     *
     * @var Carbon|null
     */
    public $nextRecurrency;

    /**
     * Start Date
     *
     * @var Carbon|null
     */
    public $startDate;

    /**
     * End Date
     *
     * @var Carbon|null
     */
    public $endDate;

    /**
     * Interval
     *
     * @var string|null
     */
    public $interval;

    /**
     * Amount
     *
     * @var int|null
     */
    public $amount;

    /**
     * Country
     *
     * @var string|null
     */
    public $country;

    /**
     * Create Date
     *
     * @var Carbon|null
     */
    public $createDate;

    /**
     * Currency
     *
     * @var string|null
     */
    public $currency;

    /**
     * Current Recurrency Try
     *
     * @var int|null
     */
    public $currentRecurrencyTry;

    /**
     * Provider
     *
     * @var string|null
     */
    public $provider;

    /**
     * Recurrency Day
     *
     * @var int|null
     */
    public $recurrencyDay;

    /**
     * Successful Recurrences
     *
     * @var int|null
     */
    public $successfulRecurrences;

    /**
     * Links
     *
     * @var Link[]|null
     */
    public $links;

    /**
     * Recurrent Transactions
     *
     * @var RecurrentTransaction[]|null
     */
    public $recurrentTransactions;

    /**
     * Reason Code
     *
     * @var int|null
     */
    public $reasonCode;

    /**
     * Reason Message
     *
     * @var string|null
     */
    public $reasonMessage;

    /**
     * Status
     *
     * @var int|null
     */
    public $status;

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
     * @return string|null
     */
    public function getRecurrentPaymentId(): ?string
    {
        return $this->recurrentPaymentId;
    }

    /**
     * @param string|null $recurrentPaymentId
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
     * @param Carbon|string|null $nextRecurrency
     * @return RecurrentPayment
     */
    public function setNextRecurrency($nextRecurrency): RecurrentPayment
    {
        $this->nextRecurrency = is_null($nextRecurrency) ? null : Carbon::parse($nextRecurrency);
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
     * @param Carbon|string|null $startDate
     * @return RecurrentPayment
     */
    public function setStartDate($startDate): RecurrentPayment
    {
        $this->startDate = is_null($startDate) ? null : Carbon::parse($startDate);
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
     * @param Carbon|string|null $endDate
     * @return RecurrentPayment
     */
    public function setEndDate($endDate): RecurrentPayment
    {
        $this->endDate = is_null($endDate) ? null : Carbon::parse($endDate);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }

    /**
     * @param string|null $interval
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
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
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
     * @param Carbon|string|null $createDate
     * @return RecurrentPayment
     */
    public function setCreateDate($createDate): RecurrentPayment
    {
        $this->createDate = is_null($createDate) ? null : Carbon::parse($createDate);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
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
     * @return string|null
     */
    public function getProvider(): ?string
    {
        return $this->provider;
    }

    /**
     * @param string|null $provider
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
        if (is_array($links)) {
            $this->links = [];

            foreach ($links as $link) {
                $this->addLink($link);
            }
        } else {
            $this->links = null;
        }

        return $this;
    }

    /**
     * @param Link|array $link
     * @return RecurrentPayment
     */
    public function addLink($link): RecurrentPayment
    {
        if (! is_array($link) && ! $link instanceof Link) {
            throw new InvalidArgumentException('The argument must be an instance of Link or an array');
        }

        if (!isset($this->links)) {
            $this->links = [];
        }

        $this->links[] = Link::create($link);

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
        if (is_array($recurrentTransactions)) {
            $this->recurrentTransactions = [];

            foreach ($recurrentTransactions as $recurrentTransaction) {
                $this->addRecurrentTransaction($recurrentTransaction);
            }
        } else {
            $this->recurrentTransactions = null;
        }

        return $this;
    }

    /**
     * @param RecurrentTransaction|array $recurrentTransaction
     * @return RecurrentPayment
     */
    public function addRecurrentTransaction($recurrentTransaction): RecurrentPayment
    {
        if (! is_array($recurrentTransaction) && ! $recurrentTransaction instanceof RecurrentTransaction) {
            throw new InvalidArgumentException('The argument must be an instance of RecurrentTransaction or an array');
        }

        if (!isset($this->recurrentTransactions)) {
            $this->recurrentTransactions = [];
        }

        $this->recurrentTransactions[] = RecurrentTransaction::create($recurrentTransaction);

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
     * @return string|null
     */
    public function getReasonMessage(): ?string
    {
        return $this->reasonMessage;
    }

    /**
     * @param string|null $reasonMessage
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
            'NextRecurrency' => $this->getNextRecurrency() ? $this->getNextRecurrency()->format('Y-m-d') : null,
            'StartDate' => $this->getStartDate() ? $this->getStartDate()->format('Y-m-d') : null,
            'EndDate' => $this->getEndDate() ? $this->getEndDate()->format('Y-m-d') : null,
            'Interval' => $this->getInterval(),
            'Amount' => $this->getAmount(),
            'Country' => $this->getCountry(),
            'CreateDate' => $this->getCreateDate() ? $this->getCreateDate()->format('Y-m-d\TH:i:s') : null,
            'Currency' => $this->getCurrency(),
            'CurrentRecurrencyTry' => $this->getCurrentRecurrencyTry(),
            'Provider' => $this->getProvider(),
            'RecurrencyDay' => $this->getRecurrencyDay(),
            'SuccessfulRecurrences' => $this->getSuccessfulRecurrences(),
            'Links' => $this->getLinks() ? array_map(function (Link $link) {
                return $link->toArray();
            }, $this->getLinks()) : null,
            'RecurrentTransactions' => $this->getRecurrentTransactions() ?
                array_map(function (RecurrentTransaction $recurrentTransaction) {
                    return $recurrentTransaction->toArray();
                }, $this->getRecurrentTransactions()) : null,
            'ReasonCode' => $this->getReasonCode(),
            'ReasonMessage' => $this->getReasonMessage(),
            'Status' => $this->getStatus(),
        ];
    }
}
