<?php

namespace ChicoRei\Packages\Cielo\Request;

class CreateSaleRequest extends CieloRequest
{
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return 'POST';
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return '/1/sales/';
    }
}
