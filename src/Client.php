<?php

namespace ChicoRei\Packages\Cielo;

use ChicoRei\Packages\Cielo\Exception\CieloClientException;
use ChicoRei\Packages\Cielo\Exception\CieloAPIException;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use Psr\Http\Message\ResponseInterface;

class Client
{
    /**
     * @var string
     */
    private $apiUrl;

    /**
     * @var string
     */
    private $queryApiUrl;

    /**
     * @var Guzzle
     */
    private $guzzle;

    /**
     * @var ResponseInterface
     */
    private $lastResponse;

    /**
     * @param Merchant $merchant
     * @param $sandbox
     * @param array $options
     */
    public function __construct(Merchant $merchant, $sandbox, array $options)
    {
        $this->apiUrl = $sandbox ? Cielo::API_SANDBOX_URLS['api'] : Cielo::API_URLS['api'];
        $this->queryApiUrl = $sandbox ? Cielo::API_SANDBOX_URLS['queryApi'] : Cielo::API_URLS['queryApi'];

        $this->guzzle = new Guzzle(array_merge($options, [
            'http_errors' => true,
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'MerchantId' => $merchant->getId(),
                'MerchantKey' => $merchant->getKey(),
            ],
        ]));
    }

    /**
     * @param IRequest $request
     * @return array
     * @throws CieloAPIException
     * @throws CieloClientException
     */
    public function sendApiRequest(IRequest $request)
    {
        return $this->sendRequest($this->apiUrl, $request);
    }

    /**
     * @param IRequest $request
     * @return array
     * @throws CieloAPIException
     * @throws CieloClientException
     */
    public function sendQueryApiRequest(IRequest $request)
    {
        return $this->sendRequest($this->queryApiUrl, $request);
    }

    /**
     * @param $apiPath
     * @param IRequest $request
     * @return array
     * @throws CieloClientException
     * @throws CieloAPIException
     */
    private function sendRequest($apiPath, IRequest $request)
    {
        try {
            $payload = $request->getPayload();

            $this->lastResponse = $this->guzzle->request(
                $request->getMethod(),
                $apiPath.$request->getPath(),
                ['json' => Util::cleanArray($payload)]
            );

            $parsedResponse = $this->handleResponse($this->lastResponse);

            return $parsedResponse;
        } catch (ServerException | ClientException $exception) {
            $this->lastResponse = $exception->getResponse();

            $response = $this->handleResponse($exception->getResponse()) ?? [];

            foreach ($response as $erro) {
                $message = $erro['Message'];
                $code = $erro['Code'];
            }

            throw new CieloAPIException(
                $message ?? $exception->getMessage(),
                $code ?? $exception->getCode(),
                $exception->getRequest(),
                $exception->getResponse()
            );
        } catch (GuzzleException | RequestException $exception) {
            throw new CieloClientException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    /**
     * Decode the Response
     *
     * @param ResponseInterface $response
     * @return null|array
     */
    public function handleResponse(ResponseInterface $response): ?array
    {
        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Get the last successfull response from API
     *
     * @return ResponseInterface|null
     */
    public function getLastResponse(): ?ResponseInterface
    {
        return $this->lastResponse;
    }
}
