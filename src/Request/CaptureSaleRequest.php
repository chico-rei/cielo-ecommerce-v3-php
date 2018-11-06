<?php

namespace ChicoRei\Packages\Cielo\Request;

class CaptureSaleRequest extends UpdateSaleRequest
{
    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf('/1/sales/%s/capture%s', $this->getPaymentId(), $this->getQueryString());
    }
}
