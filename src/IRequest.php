<?php

namespace ChicoRei\Packages\Cielo;

interface IRequest
{
    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @return string
     */
    public function getPath(): string;

    /**
     * @return array|null
     */
    public function getPayload(): ?array;
}
