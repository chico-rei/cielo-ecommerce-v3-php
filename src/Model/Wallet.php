<?php

namespace ChicoRei\Packages\Cielo\Model;

use ChicoRei\Packages\Cielo\CieloObject;

class Wallet extends CieloObject
{
    /**
     * Wallet Type Masterpass
     */
    const TYPE_MASTERPASS = 'Masterpass';

    /**
     * Wallet Type Visa Checkout
     */
    const TYPE_VISA_CHECKOUT = 'VisaCheckout';

    /**
     * Wallet Type Apple Pay
     */
    const TYPE_APPLE_PAY = 'ApplePay';

    /**
     * Wallet Type Samsung Pay
     */
    const TYPE_SAMSUNG_PAY = 'SamsungPay';

    /**
     * Type
     *
     * @var null|string
     */
    public $type;

    /**
     * Wallet Key
     *
     * @var null|string
     */
    public $walletKey;

    /**
     * ECI
     *
     * @var null|int
     */
    public $eci;

    /**
     * CAVV
     *
     * @var null|string
     */
    public $cavv;

    /**
     * Additional Data
     *
     * @var null|AdditionalData
     */
    public $additionalData;

    /**
     * @param $array
     * @return static
     */
    public static function fromArray(array $array = [])
    {
        $additionalData = $array['additionalData'] ?? $array['AdditionalData'] ?? null;

        $object = new self([
            'additionalData' => isset($additionalData) ? AdditionalData::fromArray($additionalData) : null,
        ]);

        return $object->fill($array, false);
    }

    /**
     * @return null|string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     * @return Wallet
     */
    public function setType(?string $type): Wallet
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getWalletKey(): ?string
    {
        return $this->walletKey;
    }

    /**
     * @param null|string $walletKey
     * @return Wallet
     */
    public function setWalletKey(?string $walletKey): Wallet
    {
        $this->walletKey = $walletKey;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEci(): ?int
    {
        return $this->eci;
    }

    /**
     * @param int|null $eci
     * @return Wallet
     */
    public function setEci(?int $eci): Wallet
    {
        $this->eci = $eci;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCavv(): ?string
    {
        return $this->cavv;
    }

    /**
     * @param null|string $cavv
     * @return Wallet
     */
    public function setCavv(?string $cavv): Wallet
    {
        $this->cavv = $cavv;
        return $this;
    }

    /**
     * @return AdditionalData|null
     */
    public function getAdditionalData(): ?AdditionalData
    {
        return $this->additionalData;
    }

    /**
     * @param AdditionalData|null $additionalData
     * @return Wallet
     */
    public function setAdditionalData(?AdditionalData $additionalData): Wallet
    {
        $this->additionalData = $additionalData;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'Type' => $this->getType(),
            'WalletKey' => $this->getWalletKey(),
            'Eci' => $this->getEci(),
            'Cavv' => $this->getCavv(),
            'AdditionalData' => isset($this->additionalData) ? $this->getAdditionalData()->toArray() : null,
        ];
    }
}
