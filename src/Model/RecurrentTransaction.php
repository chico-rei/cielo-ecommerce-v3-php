<?php

namespace ChicoRei\Packages\Cielo\Model;

use ChicoRei\Packages\Cielo\CieloObject;

class RecurrentTransaction extends CieloObject
{
    /**
     * Payment ID
     *
     * @var null|string
     */
    public $paymentId;

    /**
     * Payment Number
     *
     * @var null|int
     */
    public $paymentNumber;

    /**
     * Try Number
     *
     * @var null|int
     */
    public $tryNumber;

    /**
     * @return null|string
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * @param null|string $paymentId
     * @return RecurrentTransaction
     */
    public function setPaymentId(?string $paymentId): RecurrentTransaction
    {
        $this->paymentId = $paymentId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPaymentNumber(): ?int
    {
        return $this->paymentNumber;
    }

    /**
     * @param int|null $paymentNumber
     * @return RecurrentTransaction
     */
    public function setPaymentNumber(?int $paymentNumber): RecurrentTransaction
    {
        $this->paymentNumber = $paymentNumber;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTryNumber(): ?int
    {
        return $this->tryNumber;
    }

    /**
     * @param int|null $tryNumber
     * @return RecurrentTransaction
     */
    public function setTryNumber(?int $tryNumber): RecurrentTransaction
    {
        $this->tryNumber = $tryNumber;
        return $this;
    }

    /**
     * Returns array representation of object
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'PaymentId' => $this->getPaymentId(),
            'PaymentNumber' => $this->getPaymentNumber(),
            'TryNumber' => $this->getTryNumber(),
        ];
    }
}
