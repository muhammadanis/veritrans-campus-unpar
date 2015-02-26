<?php

include_once('Veritrans.php');

// Use sandbox account
Veritrans_Config::$isProduction = false;

// Set our server key
Veritrans_Config::$serverKey = 'VT-server-DciYPQln7D13kbSBFZyuOlYA';

// Fill transaction data
$transaction = array(
    "vtweb" => array (
          "credit_card_3d_secure" => false,
        ),
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => 10000, // no decimal allowed for creditcard
        ),
     'customer_details' => array(
     	'first_name' => 'Andri',
     	'last_name' => 'Litani',
     	'email' => 'andri@litani.com',
     	'phone' => '081122334455',
     	'billing_address' => array(
     		'first_name' => 'Andri'
     	),
     ),
    );
    
$vtweb_url = Veritrans_Vtweb::getRedirectionUrl($transaction);
echo $vtweb_url;
// Redirect 
//header('Location: ' . $vtweb_url);

?>