<?php
include("connect.php");
include("login.php");
$product_name = $_POST["trustname"];
$price = $_POST["amt"];
$name = $_SESSION["name1"];
$phone = $_POST["phone"];
$email = $_SESSION["email"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_3471de92e1bd85eb31ee2bf1113",
                  "X-Auth-Token:test_4a3c6360fc3abe64b7db82d7174"));
$payload = Array(
    'purpose' => $product_name,
    'amount' => $price,
    'phone' => $phone,
    'buyer_name' => $name,
    'redirect_url' => 'thankyou.php',
    'send_email' => true,
    'webhook' => '',
    'send_sms' => true,
    'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
echo $response;
//$json_decode = json_decode($response , true);
//
//$long_url = $json_decode['payment_request']['longurl'] ;
//echo $long_url
//header ('Location:'.$long_url);
  ?>
