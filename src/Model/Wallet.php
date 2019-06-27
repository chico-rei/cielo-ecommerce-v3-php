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
     * @var string|null
     */
    public $type;

    /**
     * Wallet Key
     *
     * @var string|null
     */
    public $walletKey;

    /**
     * ECI
     *
     * @var int|null
     */
    public $eci;

    /**
     * CAVV
     *
     * @var string|null
     */
    public $cavv;

    /**
     * Additional Data
     *
     * @var AdditionalData|null
     */
    public $additionalData;

    /**
     * @param $array
     * @return static
     */
    public static function create($array = [])
    {
        $additionalData = $array['additionalData'] ?? $array['AdditionalData'] ?? null;

        $object = new self([
            'additionalData' => isset($additionalData) ? AdditionalData::create($additionalData) : null,
        ]);

        return $object->fill($array, false);
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return Wallet
     */
    public function setType(?string $type): Wallet
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWalletKey(): ?string
    {
        return $this->walletKey;
    }

    /**
     * @param string|null $walletKey
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
     * @return string|null
     */
    public function getCavv(): ?string
    {
        return $this->cavv;
    }

    /**
     * @param string|null $cavv
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
            'AdditionalData' => $this->getAdditionalData() ? $this->getAdditionalData()->toArray() : null,
        ];
    }
}
