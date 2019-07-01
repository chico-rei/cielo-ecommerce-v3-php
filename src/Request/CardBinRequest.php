<?php

namespace ChicoRei\Packages\Cielo\Request;

class CardBinRequest extends CieloRequest
{
    /**
     * Bin
     *
     * @var string|null
     */
    public $bin;

    /**
     * @return string|null
     */
    public function getBin(): ?string
    {
        return $this->bin;
    }

    /**
     * @param string|null $bin
     * @return CardBinRequest
     */
    public function setBin(?string $bin): CardBinRequest
    {
        $this->bin = $bin;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return 'GET';
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf('/1/cardBin/%s', $this->getBin());
    }

    /**
     * @return array|null
     */
    public function getPayload(): ?array
    {
        return null;
    }

    /**
     * Returns array representation of object
     *
     * @return array
     */
    public function toArray(): array
    {
        return ['Bin' => $this->getBin()];
    }
}
