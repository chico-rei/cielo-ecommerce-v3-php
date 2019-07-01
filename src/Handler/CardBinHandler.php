<?php

namespace ChicoRei\Packages\Cielo\Handler;

use ChicoRei\Packages\Cielo\Client;
use ChicoRei\Packages\Cielo\Exception\CieloAPIException;
use ChicoRei\Packages\Cielo\Exception\CieloClientException;
use ChicoRei\Packages\Cielo\Request\CardBinRequest;
use ChicoRei\Packages\Cielo\Response\CardBinResponse;
use RuntimeException;

class CardBinHandler
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
     * Query Card Bin
     *
     * @param string|array|CardBinRequest $payload
     * @return CardBinResponse
     * @throws CieloAPIException
     * @throws CieloClientException
     */
    public function query($payload): CardBinResponse
    {
        if (is_string($payload)) {
            $payload = CardBinRequest::create(['bin' => $payload]);
        } elseif (is_array($payload)) {
            $payload = CardBinRequest::create($payload);
        }

        if (!$payload instanceof CardBinRequest) {
            throw new RuntimeException('Payload must be a string, an array or an instance of CardBinRequest');
        }

        $response = $this->client->sendQueryApiRequest($payload);

        return CardBinResponse::create($response);
    }
}
