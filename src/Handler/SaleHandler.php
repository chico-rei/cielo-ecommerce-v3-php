<?php

namespace ChicoRei\Packages\Cielo\Handler;

use ChicoRei\Packages\Cielo\Client;
use ChicoRei\Packages\Cielo\Request\CreateSaleRequest;
use ChicoRei\Packages\Cielo\Response\CieloResponse;

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
     * Create
     *
     * @param array|CreateSaleRequest $payload
     * @return CieloResponse
     */
    public function create($payload): CieloResponse
    {
        if (is_array($payload)) {
            $payload = CreateSaleRequest::createFromArray($payload);
        }

        if (!$payload instanceof CreateSaleRequest) {
            throw new \RuntimeException('Payload must be an array or an instance of CreateSaleRequest');
        }

        $response = $this->client->sendApiRequest($payload);

        return CieloResponse::createFromArray($response);
    }
}
