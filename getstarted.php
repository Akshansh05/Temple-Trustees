<html>
<head>
  <title>TEMPLES AND THEIR TRUST DETAILS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="getstarted.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>TEMPLES AND THEIR TRUST DETAILS</h1>      
<div class="container">
  <div class="row">
  <div class="col-sm-12">
<h2 style="text-align:center; margin-top:5%; color:white;">TEMPLE NAMES</h2>

<div class="t1">
<h3 style="color:red;"> Sri Mahaveer Swamy Jain Shwetamber Mandir Trust</h3><br>
<label style="color:blue;">Address : </label> 199, 3rd Main, Chamarajpet, Bangalore-560018<br>
<label style="color:blue;">Phone :</label> +91-80-25300643<br>
<label style="color:blue;">Type: </label> Religious Trusts<br>
<?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='Mahaveer Swamy Jain Shwetamber'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
<div class="t1">
  <h3 style="color:red;">Seetharam Mandir Trust</h3>
  <br>
  <label style="color:blue;">Address : </label> 23/11,Gangadhar Chetty Road, Bangalore-560042
  <br>
  <label style="color:blue;">Phone :</label> +91-80-26619665
  <br>
  <label style="color:blue;">Type: </label> Religious Trusts
  <br>
<?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='Seetharam Mandir Trust'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
<div class="t1">
  <h3 style="color:red;">Sri Krishna and Asthalakshmi Temple</h3>
  <br>
  <label style="color:blue;">Address : </label> Ca-1,West Of Chord Road,Opp Iskon Yeshwantpur Post, Bangalore-560022
  <br>
  <label style="color:blue;">Phone :</label> +91-80-23492538
  <br>
  <label style="color:blue;">Type: </label> Religious Trusts
  <br>
  <?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='Sri Krishna and Asthalakshmi'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
<div class="t1">
  <h3 style="color:red;">World Renewal Spiritual Trust</h3>
  <br>
  <label style="color:blue;">Address : </label>  B1 - 9, Sfs 12th B Main, 4th Cross, Behind, Yelahanka N Tn, Bangalore-560064
  <br>
  <label style="color:blue;">Phone :</label> +91-80-28560606
  <br>
  <label style="color:blue;">Type: </label> Religious Trusts
  <br>
 <?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='World Renewal Spiritual'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
<div class="t1">
  <h3 style="color:red;">Sri Jagadguru Udaseen Ashram Trust</h3>
  <br>
  <label style="color:blue;">Address : </label>  6/2,4th Cross,Jagadguru Udasi Ashram Road, Bangalore-560027
  <br>
  <label style="color:blue;">Phone :</label> +91-80-56782364
  <br>
  <label style="color:blue;">Type: </label> Religious Trusts
  <br>
  <?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='Sri Jagadguru Udaseen Ashram'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
<div class="t1">
  <h3 style="color:red;">Jain Swethamber Terapanth Trust</h3>
  <br>
  <label style="color:blue;">Address : </label> 3/4,2Nd Main,Gandhi Nagar, Bangalore-560009
  <br>
  <label style="color:blue;">Phone :</label> +91-80-22265493
  <br>
  <label style="color:blue;">Type: </label> Religious Trusts
  <br>
  <?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='Jain Swethamber Terapanth'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
<div class="t1">
  <h3 style="color:red;"> Swamy Ayyappan Temple</h3>
  <br>
  <label style="color:blue;">Address : </label>  Junction Vasanth Nagar,8th Mn,Miller Road, Bangalore-560052
  <br>
  <label style="color:blue;">Phone :</label> +91-80-41131117
  <br>
  <label style="color:blue;">Type: </label> Religious Trusts
  <br>
  <?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='Swamy Ayyappan Temple'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
<div class="t1">
  <h3 style="color:red;">Sree Ekambaraeshawarar Dharmaraja Temple</h3>
  <br>
  <label style="color:blue;">Address : </label> 143,Dharmaraja Koil Street, Bangalore-560001
  <br>
  <label style="color:blue;">Phone :</label> +91-80-25595866
  <br>
  <label style="color:blue;">Type: </label> Religious Trusts
  <br>
  <?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='Ekambaraeshawarar Dharmaraja'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
<div class="t1">
  <h3 style="color:red;">Sri Ayappa Seva Smithi</h3>
  <br>
  <label style="color:blue;">Address : </label> Sri Ramamandir Road,New Thippasandra, Bangalore-560075
  <br>
  <label style="color:blue;">Phone :</label> +91-80-25285409
  <br>
  <label style="color:blue;">Type: </label> Religious Trusts
  <br>
  <?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='Sri Ayappa Seva Smithi'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
<div class="t1">
  <h3 style="color:red;">Vaidika Dharma Sahaya Sabha</h3>
  <br>
  <label style="color:blue;">Address : </label> 40,Gayathri Devi Park Extension,16th Cross,Malleshwaram, Bangalore-560003
  <br>
  <label style="color:blue;">Phone :</label> +91-80-23342170
  <br>
  <label style="color:blue;">Type: </label> Religious Trusts
  <br>
  <?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='Vaidika Dharma Sahaya Sabha'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
<div class="t1">
  <h3 style="color:red;">Sri Shuklajushyakha Trust</h3>
  <br>
  <label style="color:blue;">Address : </label> 27/28,3Rd Mn,Chamarajpet, Bangalore-560018
  <br>
  <label style="color:blue;">Phone :</label> +91-80-26677055
  <br>
  <label style="color:blue;">Type: </label> Religious Trusts
  <br>
  <?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='Sri Shuklajushyakha Trust'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
<div class="t1">
  <h3 style="color:red;">Sri Ravishankar Vidya Mandir Trust</h3>
  <br>
  <label style="color:blue;">Address : </label> Kanakapura Road,Udayapura, Bangalore-560082
  <br>
  <label style="color:blue;">Phone :</label> +91-80-28432321
  <br>
  <label style="color:blue;">Type: </label> Religious Trusts
  <br>
 <?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='Sri Ravishankar Vidya Trust'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
<div class="t1">
  <h3 style="color:red;">Sri Sai Spiritual Centre Trust</h3>
  <br>
  <label style="color:blue;">Address : </label> 22/2,Vasanthapura,Subramanyapura, Bangalore-560061
  <br>
  <label style="color:blue;">Phone :</label> +91-80-26663628
  <br>
  <label style="color:blue;">Type: </label> Religious Trusts
  <br>
 <?php
include("connect.php");
 $sql = "SELECT trustname,sum(amount) FROM transfer GROUP BY trustname ";
$result = mysqli_query($conn,$sql);
$flag=0;
while($row = mysqli_fetch_assoc($result))
{
$tname=$row['trustname'];
$value= $row['sum(amount)'];
if($tname=='Sri Sai Spiritual Trust'){
  $flag=1;
  break;
}
}
if($flag==1)
{
  echo"<label style='color:blue;'>Current Fund Status :</label>".$value ." <br>";
}
else{
  echo"<label style='color:blue;'>Current Fund Status :</label>".'0' ." <br>";
}
?>
</div>
</div>
</div>
</div>