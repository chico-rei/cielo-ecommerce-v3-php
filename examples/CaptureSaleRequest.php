<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../vendor/autoload.php';

use \ChicoRei\Packages\Cielo\Cielo;
use \ChicoRei\Packages\Cielo\Merchant;
use \ChicoRei\Packages\Cielo\Util;

$merchant = Merchant::fromArray([
    'id' => 'ID',
    'key' => 'KEY',
]);

$cielo = new Cielo($merchant, true);

try {
    // Total
    $response = $cielo->sale()->capture([
        'PaymentId' => '16be5861-ecfb-4ad1-ac5f-4b34d893fbe6',
    ]);

    // Parcial
    $response = $cielo->sale()->capture([
        'PaymentId' => '16be5861-ecfb-4ad1-ac5f-4b34d893fbe6',
        'Amount' => '500',
    ]);

    $arrayResponse = $response->toArray();
    var_dump(Util::cleanArray($arrayResponse));
} catch (Exception $e) {
    echo 'Code: ' . $e->getCode() . PHP_EOL;
    echo 'Message: ' . $e->getMessage() . PHP_EOL;
}
