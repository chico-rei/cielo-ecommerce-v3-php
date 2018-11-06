<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../vendor/autoload.php';

use \ChicoRei\Packages\Cielo\Cielo;
use \ChicoRei\Packages\Cielo\Merchant;
use \ChicoRei\Packages\Cielo\Util;

$merchant = Merchant::createFromArray([
    'id' => 'ID',
    'key' => 'KEY',
]);

$cielo = new Cielo($merchant, true);

try {
    $response = $cielo->sale()->get('PaymentId');

    $arrayResponse = $response->toArray();
    var_dump(Util::cleanArray($arrayResponse));
} catch (Exception $e) {
    echo 'Code: ' . $e->getCode() . PHP_EOL;
    echo 'Message: ' . $e->getMessage() . PHP_EOL;
}
