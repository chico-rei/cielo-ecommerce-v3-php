<?php

namespace ChicoRei\Packages\Cielo\Response;

use ChicoRei\Packages\Cielo\Model\Customer;
use ChicoRei\Packages\Cielo\Model\Payment;
use ChicoRei\Packages\Cielo\CieloObject;

class SaleResponse extends CieloObject
{
    /**
     * Merchant Order Id
     *
     * @var null|string
     */
    public $merchantOrderId;

    /**
     * Customer
     *
     * @var null|Customer
     */
    public $customer;

    /**
     * Payment
     *
     * @var null|Payment
     */
    public $payment;

    /**
     * @param $array
     * @return static
     */
    public static function fromArray(array $array = [])
    {
        $customer = $array['Customer'] ?? $array['customer'] ?? null;
        $payment = $array['Payment'] ?? $array['payment'] ?? null;

        return new static([
            'merchantOrderId' => $array['MerchantOrderId'] ?? $array['merchantOrderId'] ?? null,
            'customer' => isset($customer) ? Customer::fromArray($customer) : null,
            'payment' => isset($payment) ? Payment::fromArray($payment) : null,
        ]);
    }

    /**
     * @return null|string
     */
    public function getMerchantOrderId(): ?string
    {
        return $this->merchantOrderId;
    }

    /**
     * @param null|string $merchantOrderId
     * @return SaleResponse
     */
    public function setMerchantOrderId(?string $merchantOrderId): SaleResponse
    {
        $this->merchantOrderId = $merchantOrderId;
        return $this;
    }

    /**
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer|null $customer
     * @return SaleResponse
     */
    public function setCustomer(?Customer $customer): SaleResponse
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return Payment|null
     */
    public function getPayment(): ?Payment
    {
        return $this->payment;
    }

    /**
     * @param Payment|null $payment
     * @return SaleResponse
     */
    public function setPayment(?Payment $payment): SaleResponse
    {
        $this->payment = $payment;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'MerchantOrderId' => $this->getMerchantOrderId(),
            'Customer' => isset($this->customer) ? $this->getCustomer()->toArray() : null,
            'Payment' => isset($this->payment) ? $this->getPayment()->toArray() : null,
        ];
    }
}
