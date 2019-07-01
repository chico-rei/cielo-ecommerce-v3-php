<?php

namespace ChicoRei\Packages\Cielo\Response;

use ChicoRei\Packages\Cielo\CieloObject;

class CardBinResponse extends CieloObject
{
    /**
     * Status
     *
     * @var string|null
     */
    public $status;

    /**
     * Provider
     *
     * @var string|null
     */
    public $provider;

    /**
     * Card Type
     *
     * @var string|null
     */
    public $cardType;

    /**
     * Foreign Card
     *
     * @var bool|null
     */
    public $foreignCard;

    /**
     * Corporate Card
     *
     * @var bool|null
     */
    public $corporateCard;

    /**
     * Issuer
     *
     * @var string|null
     */
    public $issuer;

    /**
     * Issuer Code
     *
     * @var string|null
     */
    public $issuerCode;

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     * @return CardBinResponse
     */
    public function setStatus(?string $status): CardBinResponse
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProvider(): ?string
    {
        return $this->provider;
    }

    /**
     * @param string|null $provider
     * @return CardBinResponse
     */
    public function setProvider(?string $provider): CardBinResponse
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * @param string|null $cardType
     * @return CardBinResponse
     */
    public function setCardType(?string $cardType): CardBinResponse
    {
        $this->cardType = $cardType;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getForeignCard(): ?bool
    {
        return $this->foreignCard;
    }

    /**
     * @param bool|null $foreignCard
     * @return CardBinResponse
     */
    public function setForeignCard(?bool $foreignCard): CardBinResponse
    {
        $this->foreignCard = $foreignCard;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCorporateCard(): ?bool
    {
        return $this->corporateCard;
    }

    /**
     * @param bool|null $corporateCard
     * @return CardBinResponse
     */
    public function setCorporateCard(?bool $corporateCard): CardBinResponse
    {
        $this->corporateCard = $corporateCard;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuer(): ?string
    {
        return $this->issuer;
    }

    /**
     * @param string|null $issuer
     * @return CardBinResponse
     */
    public function setIssuer(?string $issuer): CardBinResponse
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIssuerCode(): ?string
    {
        return $this->issuerCode;
    }

    /**
     * @param string|null $issuerCode
     * @return CardBinResponse
     */
    public function setIssuerCode(?string $issuerCode): CardBinResponse
    {
        $this->issuerCode = $issuerCode;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
            'Status' => $this->getStatus(),
            'Provider' => $this->getProvider(),
            'CardType' => $this->getCardType(),
            'ForeignCard' => $this->getForeignCard(),
            'CorporateCard' => $this->getCorporateCard(),
            'Issuer' => $this->getIssuer(),
            'IssuerCode' => $this->getIssuerCode(),
        ];
    }
}
