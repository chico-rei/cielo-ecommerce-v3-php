<?php

namespace ChicoRei\Packages\Cielo;

class Util
{
    /**
     * Remove all null values from array
     *
     * @param array|null $array
     * @return array|null
     */
    public static function cleanArray(?array &$array): ?array
    {
        if (is_null($array)) {
            return null;
        }

        foreach ($array as $key => &$value) {
            if (is_null($value)) {
                unset($array[$key]);
            } else {
                if (is_array($value)) {
                    Util::cleanArray($value);
                }
            }
        }

        return $array;
    }

    /**
     * Return equivalent amount in cents
     *
     * @param float|null $amount
     * @return int
     */
    public static function amountInCents(?float $amount): int
    {
        return $amount ? intval($amount * 100) : 0;
    }

    /**
     * Status code details
     *
     * @param int $statusCode
     * @return array|null
     */
    public static function getStatusDetails(int $statusCode): ?array
    {
        return CieloCodeConstants::STATUS[$statusCode] ?? null;
    }

    /**
     * Return code details
     *
     * @param string $returnCode
     * @return array|null
     */
    public static function getReturnCodeDetails(string $returnCode): ?array
    {
        return CieloCodeConstants::RETURN_CODE[$returnCode] ?? null;
    }
}
