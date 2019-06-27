<?php

namespace ChicoRei\Packages\Cielo\Request;

use ChicoRei\Packages\Cielo\IRequest;
use ChicoRei\Packages\Cielo\CieloObject;

abstract class UpdateSaleRequest extends CieloObject implements IRequest
{
    /**
     * Payment ID
     *
     * @var string|null
     */
    public $paymentId;

    /**
     * Amount
     *
     * @var int|null
     */
    public $amount;

    /**
     * Service Tax Amount
     *
     * @var int|null
     */
    public $serviceTaxAmount;

    /**
     * @return string|null
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * @param string|null $paymentId
     * @return static
     */
    public function setPaymentId(?string $paymentId): UpdateSaleRequest
    {
        $this->paymentId = $paymentId;
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
     * @return static
     */
    public function setAmount(?int $amount): UpdateSaleRequest
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getServiceTaxAmount(): ?int
    {
        return $this->serviceTaxAmount;
    }

    /**
     * @param int|null $serviceTaxAmount
     * @return static
     */
    public function setServiceTaxAmount(?int $serviceTaxAmount): UpdateSaleRequest
    {
        $this->serviceTaxAmount = $serviceTaxAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return 'PUT';
    }

    /**
     * @return string
     */
    protected function getQueryString(): string
    {
        $params = [];

        if ($this->getAmount() && $this->getAmount() > 0) {
            $params['amount'] = $this->getAmount();
        }

        if ($this->getServiceTaxAmount() && $this->getServiceTaxAmount() > 0) {
            $params['serviceTaxAmount'] = $this->getServiceTaxAmount();
        }

        return count($params) > 0 ? '?' . http_build_query($params) : '';
    }

    /**
     * @return array|null
     */
    public function getPayload(): ?array
    {
        return null;
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
            'Amount' => $this->getAmount(),
            'ServiceTaxAmount' => $this->getServiceTaxAmount(),
        ];
    }
}
