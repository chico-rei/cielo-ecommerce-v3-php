<?php

namespace ChicoRei\Packages\Cielo\Handler;

use ChicoRei\Packages\Cielo\Client;
use ChicoRei\Packages\Cielo\Request\CreateSaleRequest;
use ChicoRei\Packages\Cielo\Request\GetSaleRequest;
use ChicoRei\Packages\Cielo\Response\SaleResponse;

class SaleHandler
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Create Sale
     *
     * @param array|CreateSaleRequest $payload
     * @return SaleResponse
     * @throws \ChicoRei\Packages\Cielo\Exception\CieloAPIException
     * @throws \ChicoRei\Packages\Cielo\Exception\CieloClientException
     */
    public function create($payload): SaleResponse
    {
        if (is_array($payload)) {
            $payload = CreateSaleRequest::createFromArray($payload);
        }

        if (!$payload instanceof CreateSaleRequest) {
            throw new \RuntimeException('Payload must be an array or an instance of CreateSaleRequest');
        }

        $response = $this->client->sendApiRequest($payload);

        return SaleResponse::createFromArray($response);
    }

    /**
     * Get Sale
     *
     * @param string|GetSaleRequest $payload
     * @return SaleResponse
     * @throws \ChicoRei\Packages\Cielo\Exception\CieloAPIException
     * @throws \ChicoRei\Packages\Cielo\Exception\CieloClientException
     */
    public function get($payload): SaleResponse
    {
        if (is_string($payload)) {
            $payload = GetSaleRequest::createFromArray(['paymentId' => $payload]);
        }

        if (!$payload instanceof GetSaleRequest) {
            throw new \RuntimeException('Payload must be a string or an instance of GetSaleRequest');
        }

        $response = $this->client->sendQueryApiRequest($payload);

        return SaleResponse::createFromArray($response);
    }
}
