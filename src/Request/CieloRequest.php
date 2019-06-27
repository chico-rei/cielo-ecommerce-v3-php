<?php

namespace ChicoRei\Packages\Cielo\Request;

use ChicoRei\Packages\Cielo\IRequest;
use ChicoRei\Packages\Cielo\Model\Customer;
use ChicoRei\Packages\Cielo\Model\Payment;
use ChicoRei\Packages\Cielo\CieloObject;

abstract class CieloRequest extends CieloObject implements IRequest
{
    /**
     * Merchant Order Id
     *
     * @var string|null
     */
    public $merchantOrderId;

    /**
     * Customer
     *
     * @var Customer|null
     */
    public $customer;

    /**
     * Payment
     *
     * @var Payment|null
     */
    public $payment;

    /**
     * @param $array
     * @return static
     */
    public static function create($array = [])
    {
        $customer = $array['Customer'] ?? $array['customer'] ?? null;
        $payment = $array['Payment'] ?? $array['payment'] ?? null;

        return new static([
            'merchantOrderId' => $array['MerchantOrderId'] ?? $array['merchantOrderId'] ?? null,
            'customer' => isset($customer) ? Customer::create($customer) : null,
            'payment' => isset($payment) ? Payment::create($payment) : null,
        ]);
    }

    /**
     * @return string|null
     */
    public function getMerchantOrderId(): ?string
    {
        return $this->merchantOrderId;
    }

    /**
     * @param string|null $merchantOrderId
     * @return static
     */
    public function setMerchantOrderId(?string $merchantOrderId)
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
     * @return static
     */
    public function setCustomer(?Customer $customer)
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
     * @return $this
     */
    public function setPayment(?Payment $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getPayload(): ?array
    {
        return $this->toArray();
    }

    public function toArray(): array
    {
        return [
            'MerchantOrderId' => $this->getMerchantOrderId(),
            'Customer' => $this->getCustomer() ? $this->getCustomer()->toArray() : null,
            'Payment' => $this->getPayment() ? $this->getPayment()->toArray() : null,
        ];
    }
}
