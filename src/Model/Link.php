<?php

namespace ChicoRei\Packages\Cielo\Model;

use ChicoRei\Packages\Cielo\CieloObject;

class Link extends CieloObject
{
    /**
     * Method
     *
     * @var null|string
     */
    public $method;

    /**
     * Rel
     *
     * @var null|string
     */
    public $rel;

    /**
     * Href
     *
     * @var null|string
     */
    public $href;

    /**
     * @return null|string
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @param null|string $method
     * @return Link
     */
    public function setMethod(?string $method): Link
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRel(): ?string
    {
        return $this->rel;
    }

    /**
     * @param null|string $rel
     * @return Link
     */
    public function setRel(?string $rel): Link
    {
        $this->rel = $rel;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @param null|string $href
     * @return Link
     */
    public function setHref(?string $href): Link
    {
        $this->href = $href;
        return $this;
    }

    /**
     * Returns array representation of object
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'Method' => $this->getMethod(),
            'Rel' => $this->getRel(),
            'Href' => $this->getHref(),
        ];
    }
}
