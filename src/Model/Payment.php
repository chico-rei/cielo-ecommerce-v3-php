<?php

namespace ChicoRei\Packages\Cielo\Model;

use Carbon\Carbon;
use ChicoRei\Packages\Cielo\CieloObject;

class Payment extends CieloObject
{
    /**
     * Payment type Credit Card
     */
    const TYPE_CREDITCARD = 'CreditCard';

    /**
     * Payment type Debit Card
     */
    const TYPE_DEBITCARD = 'DebitCard';

    /**
     * Payment type Eletronic Transfer
     */
    const TYPE_ELECTRONIC_TRANSFER = 'ElectronicTransfer';

    /**
     * Payment type Boleto
     */
    const TYPE_BOLETO = 'Boleto';

    /**
     * Payment provider Bradesco
     */
    const PROVIDER_BRADESCO = 'Bradesco';

    /**
     * Payment provider Bradesco 2 (Boleto Registrado)
     */
    const PROVIDER_BRADESCO2 = 'Bradesco2';

    /**
     * Payment provider Banco do Brasil
     */
    const PROVIDER_BANCO_DO_BRASIL = 'BancoDoBrasil';

    /**
     * Payment provider Banco do Brasil 2 (Boleto Registrado)
     */
    const PROVIDER_BANCO_DO_BRASIL2 = 'BancoDoBrasil2';

    /**
     * Payment provider Cielo
     */
    const PROVIDER_CIELO = 'Cielo';

    /**
     * Payment provider Simulado
     */
    const PROVIDER_SIMULADO = 'Simulado';

    /**
     * Service tax amount
     *
     * @var int|null
     */
    public $serviceTaxAmount;

    /**
     * Installments
     *
     * @var int|null
     */
    public $installments;

    /**
     * Interest
     *
     * @var string|null
     */
    public $interest;

    /**
     * Capture
     *
     * @var bool|null
     */
    public $capture;

    /**
     * Authenticate
     *
     * @var bool|null
     */
    public $authenticate;

    /**
     * Recurrent
     *
     * @var bool|null
     */
    public $recurrent;

    /**
     * Recurrent Payment
     *
     * @var RecurrentPayment|null
     */
    public $recurrentPayment;

    /**
     * Credit Card
     *
     * @var Card|null
     */
    public $creditCard;

    /**
     * Debit Card
     *
     * @var Card|null
     */
    public $debitCard;

    /**
     * Authentication URL
     *
     * @var string|null
     */
    public $authenticationUrl;

    /**
     * TID
     *
     * @var string|null
     */
    public $tid;

    /**
     * Proof Of Sale
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
     * SoftDescriptor
     *
     * @var string|null
     */
    public $softDescriptor;

    /**
     * Return URL
     *
     * @var string|null
     */
    public $returnUrl;

    /**
     * Provider
     *
     * @var string|null
     */
    public $provider;

    /**
     * Payment ID
     *
     * @var string|null
     */
    public $paymentId;

    /**
     * Type
     *
     * @var string|null
     */
    public $type;

    /**
     * Amount
     *
     * @var int|null
     */
    public $amount;

    /**
     * Authentication URL
     *
     * @var Carbon|null
     */
    public $receivedDate;

    /**
     * Amount
     *
     * @var int|null
     */
    public $capturedAmount;

    /**
     * Captured Date
     *
     * @var Carbon|null
     */
    public $capturedDate;

    /**
     * Voided Amount
     *
     * @var int|null
     */
    public $voidedAmount;

    /**
     * Voided Date
     *
     * @var Carbon|null
     */
    public $voidedDate;

    /**
     * Currency
     *
     * @var string|null
     */
    public $currency;

    /**
     * Country
     *
     * @var string|null
     */
    public $country;

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
     * Status
     *
     * @var int|null
     */
    public $status;

    /**
     * Is Splitted
     *
     * @var bool|null
     */
    public $isSplitted;

    /**
     * Links
     *
     * @var Link[]|null
     */
    public $links;

    /**
     * Extra Data Collection
     *
     * @var array|null
     */
    public $extraDataCollection;

    /**
     * Expiration Date
     *
     * @var Carbon|null
     */
    public $expirationDate;

    /**
     * URL
     *
     * @var string|null
     */
    public $url;

    /**
     * Number
     *
     * @var string|null
     */
    public $number;

    /**
     * Boleto Number
     *
     * @var string|null
     */
    public $boletoNumber;

    /**
     * Bar Code Number
     *
     * @var string|null
     */
    public $barCodeNumber;

    /**
     * Digitable Line
     *
     * @var string|null
     */
    public $digitableLine;

    /**
     * Address
     *
     * @var string|null
     */
    public $address;

    /**
     * Assignor
     *
     * @var string|null
     */
    public $assignor;

    /**
     * Demonstrative
     *
     * @var string|null
     */
    public $demonstrative;

    /**
     * Identification
     *
     * @var string|null
     */
    public $identification;

    /**
     * Instructions
     *
     * @var string|null
     */
    public $instructions;

    /**
     * Wallet
     *
     * @var Wallet|null
     */
    public $wallet;

    /**
     * @param $array
     * @return static
     */
    public static function create($array = [])
    {
        $creditCard = $array['creditCard'] ?? $array['CreditCard'] ?? null;
        $debitCard = $array['debitCard'] ?? $array['DebitCard'] ?? null;
        $recurrentPayment = $array['recurrentPayment'] ?? $array['RecurrentPayment'] ?? null;
        $receivedDate = $array['receivedDate'] ?? $array['ReceivedDate'] ?? null;
        $capturedDate = $array['capturedDate'] ?? $array['CapturedDate'] ?? null;
        $voidedDate = $array['voidedDate'] ?? $array['VoidedDate'] ?? null;
        $expirationDate = $array['expirationDate'] ?? $array['ExpirationDate'] ?? null;
        $links = $array['links'] ?? $array['Links'] ?? null;
        $wallet = $array['wallet'] ?? $array['Wallet'] ?? null;

        $object = new static([
            'creditCard' => isset($creditCard) ? Card::create($creditCard) : null,
            'debitCard' => isset($debitCard) ? Card::create($debitCard) : null,
            'recurrentPayment' => isset($recurrentPayment) ?
                RecurrentPayment::create($recurrentPayment) : null,
            'receivedDate' => isset($receivedDate) ? Carbon::parse($receivedDate) : null,
            'capturedDate' => isset($capturedDate) ? Carbon::parse($capturedDate) : null,
            'voidedDate' => isset($voidedDate) ? Carbon::parse($voidedDate) : null,
            'expirationDate' => isset($expirationDate) ? Carbon::parse($expirationDate) : null,
            'links' => isset($links) ? array_map(function ($newLink) {
                return Link::create($newLink);
            }, $links) : null,
            'wallet' => isset($wallet) ? Wallet::create($wallet) : null,
        ]);

        return $object->fill($array, false);
    }

    /**
     * @return int|null
     */
    public function getServiceTaxAmount(): ?int
    {
        return $this->serviceTaxAmount;
    }

    /**
     * @param int|null $serviceTaxAmount
     * @return Payment
     */
    public function setServiceTaxAmount(?int $serviceTaxAmount): Payment
    {
        $this->serviceTaxAmount = $serviceTaxAmount;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getInstallments(): ?int
    {
        return $this->installments;
    }

    /**
     * @param int|null $installments
     * @return Payment
     */
    public function setInstallments(?int $installments): Payment
    {
        $this->installments = $installments;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInterest(): ?string
    {
        return $this->interest;
    }

    /**
     * @param string|null $interest
     * @return Payment
     */
    public function setInterest(?string $interest): Payment
    {
        $this->interest = $interest;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCapture(): ?bool
    {
        return $this->capture;
    }

    /**
     * @param bool|null $capture
     * @return Payment
     */
    public function setCapture(?bool $capture): Payment
    {
        $this->capture = $capture;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAuthenticate(): ?bool
    {
        return $this->authenticate;
    }

    /**
     * @param bool|null $authenticate
     * @return Payment
     */
    public function setAuthenticate(?bool $authenticate): Payment
    {
        $this->authenticate = $authenticate;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRecurrent(): ?bool
    {
        return $this->recurrent;
    }

    /**
     * @param bool|null $recurrent
     * @return Payment
     */
    public function setRecurrent(?bool $recurrent): Payment
    {
        $this->recurrent = $recurrent;
        return $this;
    }

    /**
     * @return RecurrentPayment|null
     */
    public function getRecurrentPayment(): ?RecurrentPayment
    {
        return $this->recurrentPayment;
    }

    /**
     * @param RecurrentPayment|null $recurrentPayment
     * @return Payment
     */
    public function setRecurrentPayment(?RecurrentPayment $recurrentPayment): Payment
    {
        $this->recurrentPayment = $recurrentPayment;
        return $this;
    }

    /**
     * @return Card|null
     */
    public function getCreditCard(): ?Card
    {
        return $this->creditCard;
    }

    /**
     * @param Card|null $creditCard
     * @return Payment
     */
    public function setCreditCard(?Card $creditCard): Payment
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * @return Card|null
     */
    public function getDebitCard(): ?Card
    {
        return $this->debitCard;
    }

    /**
     * @param Card|null $debitCard
     * @return Payment
     */
    public function setDebitCard(?Card $debitCard): Payment
    {
        $this->debitCard = $debitCard;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthenticationUrl(): ?string
    {
        return $this->authenticationUrl;
    }

    /**
     * @param string|null $authenticationUrl
     * @return Payment
     */
    public function setAuthenticationUrl(?string $authenticationUrl): Payment
    {
        $this->authenticationUrl = $authenticationUrl;
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
     * @return Payment
     */
    public function setTid(?string $tid): Payment
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
     * @return Payment
     */
    public function setProofOfSale(?string $proofOfSale): Payment
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
     * @return Payment
     */
    public function setAuthorizationCode(?string $authorizationCode): Payment
    {
        $this->authorizationCode = $authorizationCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSoftDescriptor(): ?string
    {
        return $this->softDescriptor;
    }

    /**
     * @param string|null $softDescriptor
     * @return Payment
     */
    public function setSoftDescriptor(?string $softDescriptor): Payment
    {
        $this->softDescriptor = $softDescriptor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * @param string|null $returnUrl
     * @return Payment
     */
    public function setReturnUrl(?string $returnUrl): Payment
    {
        $this->returnUrl = $returnUrl;
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
     * @return Payment
     */
    public function setProvider(?string $provider): Payment
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * @param string|null $paymentId
     * @return Payment
     */
    public function setPaymentId(?string $paymentId): Payment
    {
        $this->paymentId = $paymentId;
        return $this;
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
     * @return Payment
     */
    public function setType(?string $type): Payment
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int|null $amount
     * @return Payment
     */
    public function setAmount(?int $amount): Payment
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getReceivedDate(): ?Carbon
    {
        return $this->receivedDate;
    }

    /**
     * @param Carbon|null $receivedDate
     * @return Payment
     */
    public function setReceivedDate(?Carbon $receivedDate): Payment
    {
        $this->receivedDate = $receivedDate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCapturedAmount(): ?int
    {
        return $this->capturedAmount;
    }

    /**
     * @param int|null $capturedAmount
     * @return Payment
     */
    public function setCapturedAmount(?int $capturedAmount): Payment
    {
        $this->capturedAmount = $capturedAmount;
        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getCapturedDate(): ?Carbon
    {
        return $this->capturedDate;
    }

    /**
     * @param Carbon|null $capturedDate
     * @return Payment
     */
    public function setCapturedDate(?Carbon $capturedDate): Payment
    {
        $this->capturedDate = $capturedDate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVoidedAmount(): ?int
    {
        return $this->voidedAmount;
    }

    /**
     * @param int|null $voidedAmount
     * @return Payment
     */
    public function setVoidedAmount(?int $voidedAmount): Payment
    {
        $this->voidedAmount = $voidedAmount;
        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getVoidedDate(): ?Carbon
    {
        return $this->voidedDate;
    }

    /**
     * @param Carbon|null $voidedDate
     * @return Payment
     */
    public function setVoidedDate(?Carbon $voidedDate): Payment
    {
        $this->voidedDate = $voidedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     * @return Payment
     */
    public function setCurrency(?string $currency): Payment
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     * @return Payment
     */
    public function setCountry(?string $country): Payment
    {
        $this->country = $country;
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
     * @return Payment
     */
    public function setReturnCode(?string $returnCode): Payment
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
     * @return Payment
     */
    public function setReturnMessage(?string $returnMessage): Payment
    {
        $this->returnMessage = $returnMessage;
        return $this;
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
     * @return Payment
     */
    public function setStatus(?int $status): Payment
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getisSplitted(): ?bool
    {
        return $this->isSplitted;
    }

    /**
     * @param bool|null $isSplitted
     * @return Payment
     */
    public function setIsSplitted(?bool $isSplitted): Payment
    {
        $this->isSplitted = $isSplitted;
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
     * @return Payment
     */
    public function setLinks(?array $links): Payment
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getExtraDataCollection(): ?array
    {
        return $this->extraDataCollection;
    }

    /**
     * @param array|null $extraDataCollection
     * @return Payment
     */
    public function setExtraDataCollection(?array $extraDataCollection): Payment
    {
        $this->extraDataCollection = $extraDataCollection;
        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getExpirationDate(): ?Carbon
    {
        return $this->expirationDate;
    }

    /**
     * @param Carbon|null $expirationDate
     * @return Payment
     */
    public function setExpirationDate(?Carbon $expirationDate): Payment
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     * @return Payment
     */
    public function setUrl(?string $url): Payment
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param string|null $number
     * @return Payment
     */
    public function setNumber(?string $number): Payment
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBoletoNumber(): ?string
    {
        return $this->boletoNumber;
    }

    /**
     * @param string|null $boletoNumber
     * @return Payment
     */
    public function setBoletoNumber(?string $boletoNumber): Payment
    {
        $this->boletoNumber = $boletoNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBarCodeNumber(): ?string
    {
        return $this->barCodeNumber;
    }

    /**
     * @param string|null $barCodeNumber
     * @return Payment
     */
    public function setBarCodeNumber(?string $barCodeNumber): Payment
    {
        $this->barCodeNumber = $barCodeNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDigitableLine(): ?string
    {
        return $this->digitableLine;
    }

    /**
     * @param string|null $digitableLine
     * @return Payment
     */
    public function setDigitableLine(?string $digitableLine): Payment
    {
        $this->digitableLine = $digitableLine;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     * @return Payment
     */
    public function setAddress(?string $address): Payment
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAssignor(): ?string
    {
        return $this->assignor;
    }

    /**
     * @param string|null $assignor
     * @return Payment
     */
    public function setAssignor(?string $assignor): Payment
    {
        $this->assignor = $assignor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDemonstrative(): ?string
    {
        return $this->demonstrative;
    }

    /**
     * @param string|null $demonstrative
     * @return Payment
     */
    public function setDemonstrative(?string $demonstrative): Payment
    {
        $this->demonstrative = $demonstrative;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    /**
     * @param string|null $identification
     * @return Payment
     */
    public function setIdentification(?string $identification): Payment
    {
        $this->identification = $identification;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    /**
     * @param string|null $instructions
     * @return Payment
     */
    public function setInstructions(?string $instructions): Payment
    {
        $this->instructions = $instructions;
        return $this;
    }

    /**
     * @return Wallet|null
     */
    public function getWallet(): ?Wallet
    {
        return $this->wallet;
    }

    /**
     * @param Wallet|null $wallet
     * @return Payment
     */
    public function setWallet(?Wallet $wallet): Payment
    {
        $this->wallet = $wallet;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
            'ServiceTaxAmount' => $this->getServiceTaxAmount(),
            'Installments' => $this->getInstallments(),
            'Interest' => $this->getInstallments(),
            'Capture' => $this->getCapture(),
            'Authenticate' => $this->getAuthenticate(),
            'Recurrent' => $this->getRecurrent(),
            'RecurrentPayment' => $this->getRecurrentPayment() ? $this->getRecurrentPayment()->toArray() : null,
            'CreditCard' => $this->getCreditCard() ? $this->getCreditCard()->toArray() : null,
            'DebitCard' => $this->getDebitCard() ? $this->getDebitCard()->toArray() : null,
            'AuthenticationUrl' => $this->getAuthenticationUrl(),
            'Tid' => $this->getTid(),
            'ProofOfSale' => $this->getProofOfSale(),
            'AuthorizationCode' => $this->getAuthorizationCode(),
            'SoftDescriptor' => $this->getSoftDescriptor(),
            'ReturnUrl' => $this->getReturnUrl(),
            'Provider' => $this->getProvider(),
            'PaymentId' => $this->getPaymentId(),
            'Type' => $this->getType(),
            'Amount' => $this->getAmount(),
            'ReceivedDate' => $this->getReceivedDate() ? $this->getReceivedDate()->format('Y-m-d H:i:s') : null,
            'CapturedAmount' => $this->getCapturedAmount(),
            'CapturedDate' => $this->getCapturedDate() ? $this->getCapturedDate()->format('Y-m-d H:i:s') : null,
            'VoidedAmount' => $this->getVoidedAmount(),
            'VoidedDate' => $this->getVoidedDate() ? $this->getVoidedDate()->format('Y-m-d H:i:s') : null,
            'Currency' => $this->getCurrency(),
            'Country' => $this->getCountry(),
            'ReturnCode' => $this->getReturnCode(),
            'ReturnMessage' => $this->getReturnMessage(),
            'Status' => $this->getStatus(),
            'IsSplitted' => $this->getisSplitted(),
            'Links' => $this->getLinks() ? array_map(function (Link $link) {
                return $link->toArray();
            }, $this->getLinks()) : null,
            'ExtraDataCollection' => $this->getExtraDataCollection(),
            'ExpirationDate' => $this->getExpirationDate() ? $this->getExpirationDate()->format('Y-m-d') : null,
            'Url' => $this->getUrl(),
            'Number' => $this->getNumber(),
            'BoletoNumber' => $this->getBoletoNumber(),
            'BarCodeNumber' => $this->getBarCodeNumber(),
            'DigitableLine' => $this->getDigitableLine(),
            'Address' => $this->getAddress(),
            'Assignor' => $this->getAssignor(),
            'Demonstrative' => $this->getDemonstrative(),
            'Identification' => $this->getIdentification(),
            'Instructions' => $this->getInstructions(),
            'Wallet' => $this->getWallet() ? $this->getWallet()->toArray() : null,
        ];
    }
}
