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
    $response = $cielo->sale()->create([
        "MerchantOrderId" => "2014111703",
        "Payment" => [
            "Type" => "CreditCard",
            "Amount" => 15700,
            "Installments" => 1,
            "SoftDescriptor" => "123456789ABCD",
            "Capture" => true,
            "CreditCard" => [
                "CardNumber" => "4551870000000181",
                "Holder" => "Teste Holder",
                "ExpirationDate" => "12/2021",
                "SecurityCode" => "123",
                "Brand" => "Visa"
            ]
        ]
    ]);

    $arrayResponse = $response->toArray();
    var_dump(Util::cleanArray($arrayResponse));
} catch (Exception $e) {
    echo 'Code: ' . $e->getCode() . PHP_EOL;
    echo 'Message: ' . $e->getMessage() . PHP_EOL;
}
