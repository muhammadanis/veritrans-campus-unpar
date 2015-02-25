<?php
include_once("Veritrans.php");

if(empty($_POST['token-id'])){
        echo "Empty token-id";
        exit;
}

Veritrans_Config::$serverKey = "VT-server-Rm-4BMJZLo7StzJO_a3yRyqg";
Veritrans_Config::$isProduction = false;

$token_id = $_POST['token-id'];
//echo $token_id;

$transaction_details = array(
  'order_id'    => rand(),
  'gross_amount'  => $_POST['price']
);

$transaction_data = array(
  'payment_type'      => 'credit_card',
  'credit_card'       => array(
    'token_id'  => $token_id
    ),
  'transaction_details'   => $transaction_details,
  );
try{
        $result = Veritrans_VtDirect::charge($transaction_data);
        $json = json_encode($result);
        echo "{\"status\":\"success\", \"body\" : $json}";
}catch(Exception $e){
        echo "{\"status\":\"error\",\"body\": \".$e.\"}";
}

?>