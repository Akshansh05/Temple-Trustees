<?php
include("connect.php");
include("login.php");
date_default_timezone_set('Asia/Kolkata');
$today = date('d-m-Y H:i'); 
$initial_product = $_POST["trust_name"];
$final_product=$_POST["trust_name2"];
$t_amount=$_POST["tamt"];
$email=$_SESSION['email'];
$name=$_SESSION['name1'];
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
if ($initial_product==$final_product) {
     echo "<script language=\"JavaScript\">\n";
echo "alert('Cannot Transfer to same trust');\n";
echo "window.location='profile.php'";
echo "</script>"; 
exit(0);
}
$new_initial_amount=$value-$t_amount;
      function trust_exists($email,$final_product, $conn)
	{
		$result = mysqli_query($conn,"SELECT * FROM transfer WHERE trustname='$final_product'and buyer='$email'");
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
$met2="Amount after transfer from within the Account";
$sql2 = "UPDATE transfer SET amount='$new_initial_amount', date='$today',method='$met2' WHERE trustname='$initial_product'and buyer='$email'";
    $result2 = mysqli_query($conn,$sql2);
    if($new_initial_amount==0)
{
  $sql1 = "DELETE from transfer where amount='$new_initial_amount'and buyer='$email'"; 
  $result1 = mysqli_query($conn,$sql1); 
}

if(trust_exists($email,$final_product, $conn)){
    $result3 = mysqli_query($conn,"SELECT amount FROM transfer WHERE trustname='$final_product'and buyer='$email'");
		$row3 = mysqli_fetch_array($result3);
       $new_amount=$t_amount+$row3['amount'];
  $sql3 = "UPDATE transfer SET amount='$new_amount', date='$today',method='$met2' WHERE trustname='$final_product'and buyer='$email'";
    $result4 = mysqli_query($conn,$sql3);
    echo "<script language=\"JavaScript\">\n";
echo "alert('Funds Transferred Successfully.');\n";
echo "window.location='profile.php'";
echo "</script>"; 
}
  else {
      # code...
   if(mysqli_query($conn, "INSERT INTO transfer (buyer,buyer_name,trustname,date,amount,method) VALUES ('$email','$name','$final_product','$today','$t_amount','$met2')"))
{
    //insert into transfer New Trusts
    echo "<script language=\"JavaScript\">\n";
echo "alert('Funds Transferred Successfully.');\n";
echo "window.location='profile.php'";
echo "</script>"; 
}
 }
?>
