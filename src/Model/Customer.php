<?php

namespace ChicoRei\Packages\Cielo\Model;

use Carbon\Carbon;
use ChicoRei\Packages\Cielo\CieloObject;

class Customer extends CieloObject
{
    /**
     * District
     *
     * @var null|string
     */
    public $name;

    /**
     * District
     *
     * @var null|string
     */
    public $email;

    /**
     * District
     *
     * @var null|Carbon
     */
    public $birthDate;

    /**
     * District
     *
     * @var null|string
     */
    public $identity;

    /**
     * District
     *
     * @var null|string
     */
    public $identityType;

    /**
     * Address
     *
     * @var null|Address
     */
    public $address;

    /**
     * Delivery address
     *
     * @var null|Address
     */
    public $deliveryAddress;

    /**
     * @param array $array
     * @return static
     */
    public static function fromArray($array = [])
    {
        $birthDate = $array['birthDate'] ?? $array['BirthDate'] ?? null;
        $address = $array['address'] ?? $array['Address'] ?? null;
        $deliveryAddress = $array['deliveryAddress'] ?? $array['DeliveryAddress'] ?? null;

        $object = new self([
            'birthDate' => isset($birthDate) ? Carbon::parse($birthDate) : null,
            'address' => isset($address) ? Address::fromArray($address) : null,
            'deliveryAddress' => isset($deliveryAddress) ? Address::fromArray($deliveryAddress) : null,
        ]);

        return $object->fill($array, false);
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     * @return Customer
     */
    public function setName(?string $name): Customer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     * @return Customer
     */
    public function setEmail(?string $email): Customer
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return Carbon|null
     */
    public function getBirthDate(): ?Carbon
    {
        return $this->birthDate;
    }

    /**
     * @param Carbon|null $birthDate
     * @return Customer
     */
    public function setBirthDate(?Carbon $birthDate): Customer
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    /**
     * @param null|string $identity
     * @return Customer
     */
    public function setIdentity(?string $identity): Customer
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIdentityType(): ?string
    {
        return $this->identityType;
    }

    /**
     * @param null|string $identityType
     * @return Customer
     */
    public function setIdentityType(?string $identityType): Customer
    {
        $this->identityType = $identityType;
        return $this;
    }

    /**
     * @return Address|null
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * @param Address|null $address
     * @return Customer
     */
    public function setAddress(?Address $address): Customer
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return Address|null
     */
    public function getDeliveryAddress(): ?Address
    {
        return $this->deliveryAddress;
    }

    /**
     * @param Address|null $deliveryAddress
     * @return Customer
     */
    public function setDeliveryAddress(?Address $deliveryAddress): Customer
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
            'Name' => $this->getName(),
            'Email' => $this->getEmail(),
            'BirthDate' => $this->getBirthDate() ? $this->getBirthDate()->format('Y-m-d') : null,
            'Identity' => $this->getIdentity(),
            'IdentityType' => $this->getIdentityType(),
            'Address' => $this->getAddress() ? $this->getAddress()->toArray() : null,
            'DeliveryAddress' => $this->getDeliveryAddress() ? $this->getDeliveryAddress()->toArray() : null,
        ];
    }
}
