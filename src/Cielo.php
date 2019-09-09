<?php

namespace ChicoRei\Packages\Cielo;

use ChicoRei\Packages\Cielo\Handler\CardBinHandler;
use ChicoRei\Packages\Cielo\Handler\SaleHandler;

class Cielo
{
    /**
     * Cielo e-Commerce API Url
     *
     * @var array
     */
    const API_URLS = [
        'api' => 'https://api.cieloecommerce.cielo.com.br',
        'queryApi' => 'https://apiquery.cieloecommerce.cielo.com.br',
    ];

    /**
     * Cielo e-Commerce Sandbox API Url
     *
     * @var array
     */
    const API_SANDBOX_URLS = [
        'api' => 'https://apisandbox.cieloecommerce.cielo.com.br',
        'queryApi' => 'https://apiquerysandbox.cieloecommerce.cielo.com.br',
    ];

    /**
     * Cielo HTTP Client
     *
     * @var Client
     */
    private $client;

    /**
     * @var array
     */
    private $defaultOptions = [
        'timeout' => 60.0,
    ];

    /**
     * @var SaleHandler
     */
    private $saleHandler;

    /**
     * @var CardBinHandler
     */
    private $cardBinHandler;

    /**
     * Cielo Service constructor.
     *
     * @param Merchant $merchant Cielo Merchant object
     * @param bool $sandbox Use sandbox API
     * @param array $options Guzzle options except http_errors and headers
     */
    public function __construct(Merchant $merchant, $sandbox = false, array $options = [])
    {
        $options = array_merge($this->defaultOptions, $options);

        $this->client = new Client($merchant, $sandbox, $options);
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @return SaleHandler
     */
    public function sale(): SaleHandler
    {
        if (!isset($this->saleHandler)) {
            $this->saleHandler = new SaleHandler($this->client);
        }

        return $this->saleHandler;
    }

    /**
     * @return CardBinHandler
     */
    public function cardBin(): CardBinHandler
    {
        if (!isset($this->cardBinHandler)) {
            $this->cardBinHandler = new CardBinHandler($this->client);
        }

        return $this->cardBinHandler;
    }
}
