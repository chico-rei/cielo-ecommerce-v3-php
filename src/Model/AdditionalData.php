<?php

namespace ChicoRei\Packages\Cielo\Model;

use ChicoRei\Packages\Cielo\CieloObject;

class AdditionalData extends CieloObject
{
    /**
     * Ephemeral Public Key
     *
     * @var string|null
     */
    public $ephemeralPublicKey;

    /**
     * Capturecode
     *
     * @var string|null
     */
    public $capturecode;

    /**
     * @return string|null
     */
    public function getEphemeralPublicKey(): ?string
    {
        return $this->ephemeralPublicKey;
    }

    /**
     * @param string|null $ephemeralPublicKey
     * @return AdditionalData
     */
    public function setEphemeralPublicKey(?string $ephemeralPublicKey): AdditionalData
    {
        $this->ephemeralPublicKey = $ephemeralPublicKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCapturecode(): ?string
    {
        return $this->capturecode;
    }

    /**
     * @param string|null $capturecode
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
