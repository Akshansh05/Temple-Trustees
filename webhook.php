<?php
include("connect.php");
 include("pay.php");
date_default_timezone_set('Asia/Kolkata');
$today = date('d-m-Y H:i'); 
$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];
if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}
// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'salt' without the <>.
$mac_calculated = hash_hmac("sha1", implode("|", $data), "5de574f25c824976ab67eb5a50c6d46e");
if($mac_provided == $mac_calculated){
   // echo "MAC is fine";
    // Do something here
    if($data['status'] == "Credit"){
       // Payment was successful, mark it as completed in your database  
                
                $to = 'akshanshohm1999@gmail.com';
                $subject = 'Website Payment Request ' .$data['buyer_name'].'';
                $message = "<h1>Payment Details</h1>";
                $message .= "<hr>";
                $message .= '<p><b>ID:</b> '.$data['payment_id'].'</p>';
                $message .= '<p><b>Amount:</b> '.$data['amount'].'</p>';
                $message .= "<hr>";
                $message .= '<p><b>Name:</b> '.$data['buyer_name'].'</p>';
                $message .= '<p><b>Email:</b> '.$data['buyer'].'</p>';
                $message .= '<p><b>Phone:</b> '.$data['buyer_phone'].'</p>';
                
                
                $message .= "<hr>";
              
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                // send email
                mail($to, $subject, $message, $headers);
                $buyer1=$data['buyer'];
                $buyer_name1=$data['buyer_name'];
                $buyer_phone1=$data['buyer_phone'];
                $product_name1=$data["purpose"];
                $paymentreq_id1=$data["payment_request_id"];
                $payment_id1=$data['payment_id'];
                $amount1=intval($data['amount']);
                if(mysqli_query($conn, "INSERT INTO pay (buyer,buyer_name,buyer_phone,trust_name,payment_request_id,payment_id,amount,date1) VALUES ('$buyer1','$buyer_name1','$buyer_phone1','$product_name1','$paymentreq_id1','$payment_id1','$amount1','$today')"))
                {
                 // Payment was successful
                }
    }
    else{
       // Payment was unsuccessful, mark it as failed in your database
    }
}
else{
    echo "Invalid MAC passed";
}
?>

