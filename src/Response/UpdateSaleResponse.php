<?php

namespace ChicoRei\Packages\Cielo\Response;

use ChicoRei\Packages\Cielo\Model\Link;
use ChicoRei\Packages\Cielo\CieloObject;

class UpdateSaleResponse extends CieloObject
{
    /**
     * Status
     *
     * @var int|null
     */
    public $status;

    /**
     * Reason code
     *
     * @var int|null
     */
    public $reasonCode;

    /**
     * Reason message
     *
     * @var string|null
     */
    public $reasonMessage;

    /**
     * Provider return code
     *
     * @var int|null
     */
    public $providerReturnCode;

    /**
     * Reason Message
     *
     * @var string|null
     */
    public $providerReturnMessage;

    /**
     * Return Code
     *
     * @var string|null
     */
    public $returnCode;

    /**
     * Return Message
     *
     * @var string|null
     */
    public $returnMessage;

    /**
     * TID
     *
     * @var string|null
     */
    public $tid;

    /**
     * Proof of sale
     *
     * @var string|null
     */
    public $proofOfSale;

    /**
     * Authorization Code
     *
     * @var string|null
     */
    public $authorizationCode;

    /**
     * Links
     *
     * @var Link[]|null
     */
    public $links;

    /**
     * @param $array
     * @return static
     */
    public static function create($array = [])
    {
        $links = $array['links'] ?? $array['Links'] ?? null;

        $object = new static([
            'links' => isset($links) ? array_map(function ($newLink) {
                return Link::create($newLink);
            }, $links) : null,
        ]);

        return $object->fill($array, false);
    }

    /**
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int|null $status
     * @return UpdateSaleResponse
     */
    public function setStatus(?int $status): UpdateSaleResponse
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getReasonCode(): ?int
    {
        return $this->reasonCode;
    }

    /**
     * @param int|null $reasonCode
     * @return UpdateSaleResponse
     */
    public function setReasonCode(?int $reasonCode): UpdateSaleResponse
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReasonMessage(): ?string
    {
        return $this->reasonMessage;
    }

    /**
     * @param string|null $reasonMessage
     * @return UpdateSaleResponse
     */
    public function setReasonMessage(?string $reasonMessage): UpdateSaleResponse
    {
        $this->reasonMessage = $reasonMessage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getProviderReturnCode(): ?int
    {
        return $this->providerReturnCode;
    }

    /**
     * @param int|null $providerReturnCode
     * @return UpdateSaleResponse
     */
    public function setProviderReturnCode(?int $providerReturnCode): UpdateSaleResponse
    {
        $this->providerReturnCode = $providerReturnCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProviderReturnMessage(): ?string
    {
        return $this->providerReturnMessage;
    }

    /**
     * @param string|null $providerReturnMessage
     * @return UpdateSaleResponse
     */
    public function setProviderReturnMessage(?string $providerReturnMessage): UpdateSaleResponse
    {
        $this->providerReturnMessage = $providerReturnMessage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturnCode(): ?string
    {
        return $this->returnCode;
    }

    /**
     * @param string|null $returnCode
     * @return UpdateSaleResponse
     */
    public function setReturnCode(?string $returnCode): UpdateSaleResponse
    {
        $this->returnCode = $returnCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturnMessage(): ?string
    {
        return $this->returnMessage;
    }

    /**
     * @param string|null $returnMessage
     * @return UpdateSaleResponse
     */
    public function setReturnMessage(?string $returnMessage): UpdateSaleResponse
    {
        $this->returnMessage = $returnMessage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTid(): ?string
    {
        return $this->tid;
    }

    /**
     * @param string|null $tid
     * @return UpdateSaleResponse
     */
    public function setTid(?string $tid): UpdateSaleResponse
    {
        $this->tid = $tid;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProofOfSale(): ?string
    {
        return $this->proofOfSale;
    }

    /**
     * @param string|null $proofOfSale
     * @return UpdateSaleResponse
     */
    public function setProofOfSale(?string $proofOfSale): UpdateSaleResponse
    {
        $this->proofOfSale = $proofOfSale;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorizationCode(): ?string
    {
        return $this->authorizationCode;
    }

    /**
     * @param string|null $authorizationCode
     * @return UpdateSaleResponse
     */
    public function setAuthorizationCode(?string $authorizationCode): UpdateSaleResponse
    {
        $this->authorizationCode = $authorizationCode;
        return $this;
    }

    /**
     * @return Link[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * @param Link[]|null $links
     * @return UpdateSaleResponse
     */
    public function setLinks(?array $links): UpdateSaleResponse
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
            'Status' => $this->getStatus(),
            'ReasonCode' => $this->getReasonCode(),
            'ReasonMessage' => $this->getReasonMessage(),
            'ProviderReturnCode' => $this->getProviderReturnCode(),
            'ProviderReturnMessage' => $this->getProviderReturnMessage(),
            'ReturnCode' => $this->getReturnCode(),
            'ReturnMessage' => $this->getReturnMessage(),
            'Tid' => $this->getTid(),
            'ProofOfSale' => $this->getProofOfSale(),
            'AuthorizationCode' => $this->getAuthorizationCode(),
            'Links' => $this->getLinks() ? array_map(function (Link $link) {
                return $link->toArray();
            }, $this->getLinks()) : null,
        ];
    }
}
