<?php

namespace ChicoRei\Packages\Cielo\Model;

use ChicoRei\Packages\Cielo\CieloObject;

class Link extends CieloObject
{
    /**
     * Method
     *
     * @var string|null
     */
    public $method;

    /**
     * Rel
     *
     * @var string|null
     */
    public $rel;

    /**
     * Href
     *
     * @var string|null
     */
    public $href;

    /**
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @param string|null $method
     * @return Link
     */
    public function setMethod(?string $method): Link
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRel(): ?string
    {
        return $this->rel;
    }

    /**
     * @param string|null $rel
     * @return Link
     */
    public function setRel(?string $rel): Link
    {
        $this->rel = $rel;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @param string|null $href
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
