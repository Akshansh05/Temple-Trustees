<?php
include("connect.php");
include("login.php");
date_default_timezone_set('Asia/Kolkata');
$today = date('d-m-Y H:i'); 
$initial_product = $_POST["trust_name1"];
$final_product=$_POST["trust_name22"];
$t_amount=$_POST["tamt1"];
$email=$_SESSION['email'];
$name=$_SESSION['name1'];
$d_email=$_POST['em1'];
 $sql = "SELECT amount FROM transfer where trustname='$initial_product' and buyer='$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$value= $row['amount'];
if ($t_amount>$value) {
     echo "<script language=\"JavaScript\">\n";
echo "alert('Amount should be within the Range');\n";
echo "window.location='profile.php'";
echo "</script>"; 
exit(0);
}
if(!email_exists($d_email, $conn))
{echo "<script language=\"JavaScript\">\n";
echo "alert('Enter existing Email ');\n";
echo "window.location='profile.php'";
echo "</script>"; 
exit(0);

}
$new_initial_amount=$value-$t_amount;
 function other_trust_exists($d_email,$final_product, $conn)
	{
		$result = mysqli_query($conn,"SELECT * FROM transfer WHERE trustname='$final_product'and buyer='$d_email'");
		$row = mysqli_fetch_array($result);
		if(mysqli_num_rows($result) == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
    }
    $met3="Amount after transfer to ".$d_email ." the Account";
    $met4="Amount after receiving from ". $email. " Account";
$sql2 = "UPDATE transfer SET amount='$new_initial_amount', date='$today',method='$met3' WHERE trustname='$initial_product'and buyer='$email'";
    $result2 = mysqli_query($conn,$sql2);
    if($new_initial_amount==0)
{
  $sql1 = "DELETE from transfer where amount='$new_initial_amount'and buyer='$email'"; 
  $result1 = mysqli_query($conn,$sql1); 
}
if(other_trust_exists($d_email,$final_product, $conn)){
    $result3 = mysqli_query($conn,"SELECT amount FROM transfer WHERE trustname='$final_product'and buyer='$d_email'");
		$row3 = mysqli_fetch_array($result3);
       $new_amount=$t_amount+$row3['amount'];
  $sql3 = "UPDATE transfer SET amount='$new_amount', date='$today',method='$met4' WHERE trustname='$final_product'and buyer='$d_email'";
    $result4 = mysqli_query($conn,$sql3);
    echo "<script language=\"JavaScript\">\n";
echo "alert('Funds Transferred Successfully to other Account.');\n";
echo "window.location='profile.php'";
echo "</script>"; 
}
  else {
      # code...
      $result = mysqli_query($conn,"SELECT name FROM log WHERE email='$d_email'");
        $row = mysqli_fetch_array($result);
        $name1=$row['name'];
   if(mysqli_query($conn, "INSERT INTO transfer (buyer,buyer_name,trustname,date,amount,method) VALUES ('$d_email','$name1','$final_product','$today','$t_amount','$met4')"))
{
    //insert into transfer New Trusts
    echo "<script language=\"JavaScript\">\n";
echo "alert('Funds Transferred Successfully to other Account.');\n";
echo "window.location='profile.php'";
echo "</script>"; 
}
 }


?>
