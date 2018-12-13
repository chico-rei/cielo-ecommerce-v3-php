<?php

namespace ChicoRei\Packages\Cielo\Response;

use ChicoRei\Packages\Cielo\Model\Link;
use ChicoRei\Packages\Cielo\CieloObject;

class UpdateSaleResponse extends CieloObject
{
    /**
     * Status
     *
     * @var null|int
     */
    public $status;

    /**
     * Reason code
     *
     * @var null|int
     */
    public $reasonCode;

    /**
     * Reason message
     *
     * @var null|string
     */
    public $reasonMessage;

    /**
     * Provider return code
     *
     * @var null|int
     */
    public $providerReturnCode;

    /**
     * Reason Message
     *
     * @var null|string
     */
    public $providerReturnMessage;

    /**
     * Return Code
     *
     * @var null|string
     */
    public $returnCode;

    /**
     * Return Message
     *
     * @var null|string
     */
    public $returnMessage;

    /**
     * TID
     *
     * @var null|string
     */
    public $tid;

    /**
     * Proof of sale
     *
     * @var null|string
     */
    public $proofOfSale;

    /**
     * Authorization Code
     *
     * @var null|string
     */
    public $authorizationCode;

    /**
     * Links
     *
     * @var null|Link[]
     */
    public $links;

    /**
     * @param $array
     * @return static
     */
    public static function fromArray(array $array = [])
    {
        $links = $array['links'] ?? $array['Links'] ?? null;

        $object = new static([
            'links' => isset($links) ? array_map(function ($newLink) {
                return Link::fromArray($newLink);
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
     * @return null|string
     */
    public function getReasonMessage(): ?string
    {
        return $this->reasonMessage;
    }

    /**
     * @param null|string $reasonMessage
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
     * @return null|string
     */
    public function getProviderReturnMessage(): ?string
    {
        return $this->providerReturnMessage;
    }

    /**
     * @param null|string $providerReturnMessage
     * @return UpdateSaleResponse
     */
    public function setProviderReturnMessage(?string $providerReturnMessage): UpdateSaleResponse
    {
        $this->providerReturnMessage = $providerReturnMessage;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnCode(): ?string
    {
        return $this->returnCode;
    }

    /**
     * @param null|string $returnCode
     * @return UpdateSaleResponse
     */
    public function setReturnCode(?string $returnCode): UpdateSaleResponse
    {
        $this->returnCode = $returnCode;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnMessage(): ?string
    {
        return $this->returnMessage;
    }

    /**
     * @param null|string $returnMessage
     * @return UpdateSaleResponse
     */
    public function setReturnMessage(?string $returnMessage): UpdateSaleResponse
    {
        $this->returnMessage = $returnMessage;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTid(): ?string
    {
        return $this->tid;
    }

    /**
     * @param null|string $tid
     * @return UpdateSaleResponse
     */
    public function setTid(?string $tid): UpdateSaleResponse
    {
        $this->tid = $tid;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getProofOfSale(): ?string
    {
        return $this->proofOfSale;
    }

    /**
     * @param null|string $proofOfSale
     * @return UpdateSaleResponse
     */
    public function setProofOfSale(?string $proofOfSale): UpdateSaleResponse
    {
        $this->proofOfSale = $proofOfSale;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAuthorizationCode(): ?string
    {
        return $this->authorizationCode;
    }

    /**
     * @param null|string $authorizationCode
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
            'Links' => isset($this->links) ? array_map(function (Link $newLink) {
                return $newLink->toArray();
            }, $this->getLinks()) : null,
        ];
    }
}
