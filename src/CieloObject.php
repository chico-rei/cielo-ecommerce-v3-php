<?php

namespace ChicoRei\Packages\Cielo;

use InvalidArgumentException;

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
            $setter = 'set'.ucfirst($key);

            if (method_exists($this, $setter) && ($overwrite || !isset($this->{lcfirst($key)}))) {
                $this->$setter($value);
            }
        }

        return $this;
    }

    /**
     * @param array|static $data
     * @return static
     */
    public static function create($data = [])
    {
        if ($data instanceof static) {
            return $data;
        }

        if (! is_array($data)) {
            throw new InvalidArgumentException('create() argument must be an array');
        }

        return new static($data);
    }

    /**
     * Returns array representation of object
     *
     * @return array
     */
    abstract public function toArray(): array;
}
