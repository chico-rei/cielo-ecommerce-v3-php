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
     * @return null|array
     */
    public function getPayload(): ?array;
}
