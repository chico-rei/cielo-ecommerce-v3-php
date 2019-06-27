<?php

namespace ChicoRei\Packages\Cielo\Exception;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

class CieloAPIException extends \Exception
{
    /**
     * @var Request|null
     */
    private $request;

    /**
     * @var Response|null
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
        string $message = '',
        string $code = '0',
        ?Request $request = null,
        ?Response $response = null
    ) {
        parent::__construct($message);

        $this->code = $code;
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * @return Request|null
     */
    public function getRequest(): ?Request
    {
        return $this->request;
    }

    /**
     * @return Response|null
     */
    public function getResponse(): ?Response
    {
        return $this->response;
    }
}
