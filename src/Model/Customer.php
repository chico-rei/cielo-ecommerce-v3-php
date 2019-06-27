<?php

namespace ChicoRei\Packages\Cielo\Model;

use Carbon\Carbon;
use ChicoRei\Packages\Cielo\CieloObject;
use InvalidArgumentException;

class Customer extends CieloObject
{
    /**
     * District
     *
     * @var string|null
     */
    public $name;

    /**
     * District
     *
     * @var string|null
     */
    public $email;

    /**
     * District
     *
     * @var Carbon|null
     */
    public $birthDate;

    /**
     * District
     *
     * @var string|null
     */
    public $identity;

    /**
     * District
     *
     * @var string|null
     */
    public $identityType;

    /**
     * Address
     *
     * @var Address|null
     */
    public $address;

    /**
     * Delivery address
     *
     * @var Address|null
     */
    public $deliveryAddress;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Customer
     */
    public function setName(?string $name): Customer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
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
     * @param Carbon|string|null $birthDate
     * @return Customer
     */
    public function setBirthDate($birthDate): Customer
    {
        $this->birthDate = is_null($birthDate) ? null : Carbon::parse($birthDate);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    /**
     * @param string|null $identity
     * @return Customer
     */
    public function setIdentity(?string $identity): Customer
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdentityType(): ?string
    {
        return $this->identityType;
    }

    /**
     * @param string|null $identityType
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
     * @param Address|array|null $address
     * @return Customer
     */
    public function setAddress($address): Customer
    {
        $this->address = is_null($address) ? null : Address::create($address);
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
     * @param Address|array|null $deliveryAddress
     * @return Customer
     */
    public function setDeliveryAddress($deliveryAddress): Customer
    {
        $this->deliveryAddress = is_null($deliveryAddress) ? null : Address::create($deliveryAddress);
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
