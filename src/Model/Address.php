<?php

namespace ChicoRei\Packages\Cielo\Model;

use ChicoRei\Packages\Cielo\CieloObject;

class Address extends CieloObject
{
    /**
     * Street
     *
     * @var null|string
     */
    public $street;

    /**
     * Number
     *
     * @var null|string
     */
    public $number;

    /**
     * Complement
     *
     * @var null|string
     */
    public $complement;

    /**
     * Zip Code
     *
     * @var null|string
     */
    public $zipCode;

    /**
     * City
     *
     * @var null|string
     */
    public $city;

    /**
     * State
     *
     * @var null|string
     */
    public $state;

    /**
     * Country
     *
     * @var null|string
     */
    public $country;

    /**
     * District
     *
     * @var null|string
     */
    public $district;

    /**
     * @return null|string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param null|string $street
     * @return Address
     */
    public function setStreet(?string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param null|string $number
     * @return Address
     */
    public function setNumber(?string $number): Address
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getComplement(): ?string
    {
        return $this->complement;
    }

    /**
     * @param null|string $complement
     * @return Address
     */
    public function setComplement(?string $complement): Address
    {
        $this->complement = $complement;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param null|string $zipCode
     * @return Address
     */
    public function setZipCode(?string $zipCode): Address
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param null|string $city
     * @return Address
     */
    public function setCity(?string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param null|string $state
     * @return Address
     */
    public function setState(?string $state): Address
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param null|string $country
     * @return Address
     */
    public function setCountry(?string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param null|string $district
     * @return Address
     */
    public function setDistrict(?string $district): Address
    {
        $this->district = $district;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'Street' => $this->getStreet(),
            'Number' => $this->getNumber(),
            'Complement' => $this->getComplement(),
            'ZipCode' => $this->getZipCode(),
            'City' => $this->getCity(),
            'State' => $this->getState(),
            'Country' => $this->getCountry(),
            'District' => $this->getDistrict(),
        ];
    }
}
