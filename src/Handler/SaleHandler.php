<?php

namespace ChicoRei\Packages\Cielo\Handler;

use ChicoRei\Packages\Cielo\Client;
use ChicoRei\Packages\Cielo\Request\CaptureSaleRequest;
use ChicoRei\Packages\Cielo\Request\CreateSaleRequest;
use ChicoRei\Packages\Cielo\Request\GetSaleRequest;
use ChicoRei\Packages\Cielo\Request\VoidSaleRequest;
use ChicoRei\Packages\Cielo\Response\SaleResponse;
use ChicoRei\Packages\Cielo\Response\UpdateSaleResponse;

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
            $payload = CreateSaleRequest::create($payload);
        }

        if (!$payload instanceof CreateSaleRequest) {
            throw new \RuntimeException('Payload must be an array or an instance of CreateSaleRequest');
        }

        $response = $this->client->sendApiRequest($payload);

        return SaleResponse::create($response);
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
            $payload = GetSaleRequest::create(['paymentId' => $payload]);
        }

        if (!$payload instanceof GetSaleRequest) {
            throw new \RuntimeException('Payload must be a string or an instance of GetSaleRequest');
        }

        $response = $this->client->sendQueryApiRequest($payload);

        return SaleResponse::create($response);
    }

    /**
     * Capture Sale
     *
     * @param string|array|CaptureSaleRequest $payload
     * @return UpdateSaleResponse
     * @throws \ChicoRei\Packages\Cielo\Exception\CieloAPIException
     * @throws \ChicoRei\Packages\Cielo\Exception\CieloClientException
     */
    public function capture($payload): UpdateSaleResponse
    {
        if (is_string($payload)) {
            $payload = CaptureSaleRequest::create(['paymentId' => $payload]);
        } elseif (is_array($payload)) {
            $payload = CaptureSaleRequest::create($payload);
        }

        if (!$payload instanceof CaptureSaleRequest) {
            throw new \RuntimeException('Payload must be a string, an array or an instance of CaptureSaleRequest');
        }

        $response = $this->client->sendApiRequest($payload);

        return UpdateSaleResponse::create($response);
    }

    /**
     * Void Sale
     *
     * @param string|array|VoidSaleRequest $payload
     * @return UpdateSaleResponse
     * @throws \ChicoRei\Packages\Cielo\Exception\CieloAPIException
     * @throws \ChicoRei\Packages\Cielo\Exception\CieloClientException
     */
    public function void($payload): UpdateSaleResponse
    {
        if (is_string($payload)) {
            $payload = VoidSaleRequest::create(['paymentId' => $payload]);
        } elseif (is_array($payload)) {
            $payload = VoidSaleRequest::create($payload);
        }

        if (!$payload instanceof VoidSaleRequest) {
            throw new \RuntimeException('Payload must be a string, an array or an instance of VoidSaleRequest');
        }

        $response = $this->client->sendApiRequest($payload);

        return UpdateSaleResponse::create($response);
    }
}
