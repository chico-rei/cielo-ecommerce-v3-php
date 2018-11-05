<?php

namespace ChicoRei\Packages\Cielo;

class Merchant extends CieloObject
{
    /**
     * Merchant ID
     *
     * @var string
     */
    public $id;

    /**
     * Merchant ID
     *
     * @var string
     */
    public $key;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Merchant
     */
    public function setId(string $id): Merchant
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return Merchant
     */
    public function setKey(string $key): Merchant
    {
        $this->key = $key;
        return $this;
    }

    /**s
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
          'id' => $this->getId(),
          'key' => $this->getKey(),
        ];
    }
}
