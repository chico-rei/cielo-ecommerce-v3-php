<?php

namespace ChicoRei\Packages\Cielo\Model;

use ChicoRei\Packages\Cielo\CieloObject;

class Address extends CieloObject
{
    /**
     * Street
     *
     * @var string|null
     */
    public $street;

    /**
     * Number
     *
     * @var string|null
     */
    public $number;

    /**
     * Complement
     *
     * @var string|null
     */
    public $complement;

    /**
     * Zip Code
     *
     * @var string|null
     */
    public $zipCode;

    /**
     * City
     *
     * @var string|null
     */
    public $city;

    /**
     * State
     *
     * @var string|null
     */
    public $state;

    /**
     * Country
     *
     * @var string|null
     */
    public $country;

    /**
     * District
     *
     * @var string|null
     */
    public $district;

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string|null $street
     * @return Address
     */
    public function setStreet(?string $street): Address
    {
        $this->street = $street;
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
     * @return Address
     */
    public function setNumber(?string $number): Address
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComplement(): ?string
    {
        return $this->complement;
    }

    /**
     * @param string|null $complement
     * @return Address
     */
    public function setComplement(?string $complement): Address
    {
        $this->complement = $complement;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string|null $zipCode
     * @return Address
     */
    public function setZipCode(?string $zipCode): Address
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return Address
     */
    public function setCity(?string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     * @return Address
     */
    public function setState(?string $state): Address
    {
        $this->state = $state;
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
     * @return Address
     */
    public function setCountry(?string $country): Address
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param string|null $district
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
