<?php

namespace ChicoRei\Packages\Cielo\Request;

use ChicoRei\Packages\Cielo\CieloObject;
use ChicoRei\Packages\Cielo\IRequest;

class GetSaleRequest extends CieloObject implements IRequest
{
    /**
     * Payment ID
     *
     * @var null|string
     */
    public $paymentId;

    /**
     * @return null|string
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * @param null|string $paymentId
     * @return GetSaleRequest
     */
    public function setPaymentId(?string $paymentId): GetSaleRequest
    {
        $this->paymentId = $paymentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return 'GET';
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf('/1/sales/%s', $this->getPaymentId());
    }

    /**
     * @return null|array
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
        return ['PaymentId' => $this->getPaymentId()];
    }
}
