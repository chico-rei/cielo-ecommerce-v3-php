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
     * Capture Code
     *
     * @var string|null
     */
    public $captureCode;

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
    public function getCaptureCode(): ?string
    {
        return $this->captureCode;
    }

    /**
     * @param string|null $captureCode
     * @return AdditionalData
     */
    public function setCaptureCode(?string $captureCode): AdditionalData
    {
        $this->captureCode = $captureCode;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
            'EphemeralPublicKey' => $this->getEphemeralPublicKey(),
            'CaptureCode' => $this->getCapturecode(),
        ];
    }
}
