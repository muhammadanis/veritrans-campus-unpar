<?php

include_once('Veritrans.php');

// Use sandbox account
Veritrans_Config::$isProduction = false;

// Set our server key
Veritrans_Config::$serverKey = 'VT-server-sTIr2MYh4e6v9eI2C4gbD31l';

// Fill transaction data
$transaction = array(
    "vtweb" => array (
          "credit_card_3d_secure" => true,
        ),
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => 10000, // no decimal allowed for creditcard
        )
    );

$vtweb_url = Veritrans_Vtweb::getRedirectionUrl($transaction);

// Redirect 
header('Location: ' . $vtweb_url);

?>