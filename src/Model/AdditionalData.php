<?php

namespace ChicoRei\Packages\Cielo\Model;

use ChicoRei\Packages\Cielo\CieloObject;

class AdditionalData extends CieloObject
{
    /**
     * Ephemeral Public Key
     *
     * @var null|string
     */
    public $ephemeralPublicKey;

    /**
     * Capturecode
     *
     * @var null|string
     */
    public $capturecode;

    /**
     * @return null|string
     */
    public function getEphemeralPublicKey(): ?string
    {
        return $this->ephemeralPublicKey;
    }

    /**
     * @param null|string $ephemeralPublicKey
     * @return AdditionalData
     */
    public function setEphemeralPublicKey(?string $ephemeralPublicKey): AdditionalData
    {
        $this->ephemeralPublicKey = $ephemeralPublicKey;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCapturecode(): ?string
    {
        return $this->capturecode;
    }

    /**
     * @param null|string $capturecode
     * @return AdditionalData
     */
    public function setCapturecode(?string $capturecode): AdditionalData
    {
        $this->capturecode = $capturecode;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
            'EphemeralPublicKey' => $this->getEphemeralPublicKey(),
            'Capturecode' => $this->getCapturecode(),
        ];
    }
}
