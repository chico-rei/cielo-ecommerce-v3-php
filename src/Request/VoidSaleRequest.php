<?php

namespace ChicoRei\Packages\Cielo\Request;

class VoidSaleRequest extends UpdateSaleRequest
{
    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf('/1/sales/%s/void%s', $this->getPaymentId(), $this->getQueryString());
    }
}
