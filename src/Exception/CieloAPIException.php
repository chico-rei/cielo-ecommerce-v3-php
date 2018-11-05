<?php

namespace ChicoRei\Packages\Cielo\Exception;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

class CieloAPIException extends \Exception
{
    /**
     * @var null|Request
     */
    private $request;

    /**
     * @var null|Response
     */
    private $response;

    /**
     * CieloAPIException constructor.
     * @param string $message
     * @param string $code
     * @param Request|null $request
     * @param Response|null $response
     */
    public function __construct(
        string $message = "",
        string $code = "0",
        ?Request $request = null,
        ?Response $response = null
    ) {
        parent::__construct($message);

        $this->code = $code;
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * @return null|Request
     */
    public function getRequest(): ?Request
    {
        return $this->request;
    }

    /**
     * @return null|Response
     */
    public function getResponse(): ?Response
    {
        return $this->response;
    }
}
