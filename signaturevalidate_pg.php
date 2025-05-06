<?php
$rawBody= '{"data":{"order":{"order_id":"OrderId611096736","order_amount":34.00,"order_currency":"INR","order_tags":null},"payment":{"cf_payment_id":14910444666,"payment_status":"SUCCESS","payment_amount":34.00,"payment_currency":"INR","payment_message":"Transaction Successful","payment_time":"2024-02-09T12:33:44+05:30","bank_reference":"100750","auth_id":null,"payment_method":{"netbanking":{"channel":null,"netbanking_bank_code":"3038","netbanking_bank_name":"Punjab National Bank - Retail Banking"}},"payment_group":"net_banking"},"customer_details":{"customer_name":"test Mishra","customer_id":"customer_1483646104","customer_email":"test@gmail.com","customer_phone":"9044789347"}},"event_time":"2024-02-09T12:33:46+05:30","type":"PAYMENT_SUCCESS_WEBHOOK"}';

$ts="1707462226629";
$signStr = $ts . $rawBody;
$key = "1f4ee1fd095fcd3cfa702f0c91389c8adca03b5a";
$computeSig = base64_encode(hash_hmac('sha256', $signStr, $key, true));
//$sig = hash_hmac('sha256', "OrderId2129481679", "1f4ee1fd095fcd3cfa702f0c91389c8adca03b5a");
 print($computeSig);die('die here');
  //print($sig);die('die here');


?>