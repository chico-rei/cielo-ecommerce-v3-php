<?php

namespace ChicoRei\Packages\Cielo;

abstract class CieloObject
{
    /**
     * CieloObject constructor.
     *
     * @param array $values
     */
    public function __construct(array $values = [])
    {
        $this->fill($values);
    }

    /**
     * @param array $array
     * @param bool $overwrite
     * @return static
     */
    public function fill(array $array = [], $overwrite = true)
    {
        foreach ($array as $key => $value) {
            $key = lcfirst($key);
            if (property_exists($this, $key) && ($overwrite || !isset($this->$key))) {
                $this->$key = $value;
            }
        }

        return $this;
    }

    /**
     * @param $array
     * @return static
     */
    public static function fromArray(array $array = [])
    {
        return new static($array);
    }

    /**
     * Returns array representation of object
     *
     * @return array
     */
    abstract public function toArray(): array;
}
