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
     * @param Customer|array|null $customer
     * @return static
     */
    public function setCustomer($customer)
    {
        $this->customer = is_null($customer) ? null : Customer::create($customer);
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
     * @param Payment|array|null $payment
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->payment = is_null($payment) ? null : Payment::create($payment);
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
