<?php

namespace ChicoRei\Packages\Cielo\Model;

use ChicoRei\Packages\Cielo\CieloObject;

class Card extends CieloObject
{
    /**
     * Visa Brand
     */
    const BRAND_VISA = 'Visa';

    /**
     * Mastercard Brand
     */
    const BRAND_MASTERCARD = 'Master';

    /**
     * Amex Brand
     */
    const BRAND_AMEX = 'Amex';

    /**
     * Elo Brand
     */
    const BRAND_ELO = 'Elo';

    /**
     * Aura Brand
     */
    const BRAND_AURA = 'Aura';

    /**
     * JCB Brand
     */
    const BRAND_JCB = 'JCB';

    /**
     * Diners Brand
     */
    const BRAND_DINERS = 'Diners';

    /**
     * Discover Brand
     */
    const BRAND_DISCOVER = 'Discover';

    /**
     * Hipercard Brand
     */
    const BRAND_HIPERCARD = 'Hipercard';

    /**
     * Credit card number
     *
     * @var null|string
     */
    public $cardNumber;

    /**
     * Credit card holder
     *
     * @var null|string
     */
    public $holder;

    /**
     * Credit card expiration date
     *
     * @var null|string
     */
    public $expirationDate;

    /**
     * Credit card security code
     *
     * @var null|string
     */
    public $securityCode;

    /**
     * Save Card
     *
     * @var null|bool
     */
    public $saveCard;

    /**
     * Credit card brand
     *
     * @var null|string
     */
    public $brand;

    /**
     * Credit card token
     *
     * @var null|string
     */
    public $cardToken;

    /**
     * Credit card customer name
     *
     * @var null|string
     */
    public $customerName;

    /**
     * @return null|string
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * @param null|string $cardNumber
     * @return Card
     */
    public function setCardNumber(?string $cardNumber): Card
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getHolder(): ?string
    {
        return $this->holder;
    }

    /**
     * @param null|string $holder
     * @return Card
     */
    public function setHolder(?string $holder): Card
    {
        $this->holder = $holder;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }

    /**
     * @param null|string $expirationDate
     * @return Card
     */
    public function setExpirationDate(?string $expirationDate): Card
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSecurityCode(): ?string
    {
        return $this->securityCode;
    }

    /**
     * @param null|string $securityCode
     * @return Card
     */
    public function setSecurityCode(?string $securityCode): Card
    {
        $this->securityCode = $securityCode;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSaveCard(): ?bool
    {
        return $this->saveCard;
    }

    /**
     * @param bool|null $saveCard
     * @return Card
     */
    public function setSaveCard(?bool $saveCard): Card
    {
        $this->saveCard = $saveCard;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param null|string $brand
     * @return Card
     */
    public function setBrand(?string $brand): Card
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCardToken(): ?string
    {
        return $this->cardToken;
    }

    /**
     * @param null|string $cardToken
     * @return Card
     */
    public function setCardToken(?string $cardToken): Card
    {
        $this->cardToken = $cardToken;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * @param null|string $customerName
     * @return Card
     */
    public function setCustomerName(?string $customerName): Card
    {
        $this->customerName = $customerName;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'CardNumber' => $this->getCardNumber(),
            'Holder' => $this->getHolder(),
            'ExpirationDate' => $this->getExpirationDate(),
            'SecurityCode' => $this->getSecurityCode(),
            'SaveCard' => $this->getSaveCard(),
            'Brand' => $this->getBrand(),
            'CardToken' => $this->getCardToken(),
            'CustomerName' => $this->getCustomerName(),
        ];
    }
}
