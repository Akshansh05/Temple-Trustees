<?php
include("connect.php");
  include("login.php");
  if(!isset($_SESSION['email'])){
    echo "<script language=\"JavaScript\">\n";
            echo "alert('Not Logged in, Please Log in to continue.');\n";
            echo "window.location='index.php'";
			echo "</script>";
}
        ?>
 <html lang="en">
<head>
  <title>WELCOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="signup.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .navbar {
    margin-bottom:0;
    background-color:#800000;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.9;
}
.navbar li a, .navbar .navbar-brand { 
    color: #fff !important;
}

/* On hover, the links will turn red */
.navbar-nav li a:hover {
    color: blue!important;
cursor: pointer;
}
/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    border-color: transparent;
}
body
{background:url(abtback.jpg) no-repeat center center fixed ;
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.container{
  margin-top:10%;
}
input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=number]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
select {
  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 5px solid black;
    background-color: #DEB887;
}

th, td {
    text-align: left;
}



    </style>
</head>       
<body id="myprofile" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">TEMPLE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
           <li><a onclick="document.getElementById('id02').style.display='block'" style="width:auto;">CHANGE PASSWORD</a>

</li>
 <li><a onclick="myFunction()" style="width:auto; ">DELETE ACCOUNT</a></li>
            <li><a href="logout.php" style="width:auto;">LOGOUT</a></li>
</ul>

    </div>
  </div>
</nav>
<div id="id02" class="modal1">
<form class="modal-content1 animate" method="POST" onsubmit="return myFunction1();" action="changepassword.php" id="changepassword"> 
  <div class="container2">    
 <label><b> New Password: </b></label><input type="password" placeholder="Must be greater than 8 characters" name="newpsw1" required>
 <label><b>Repeat Password:</b></label>
    <input type="password" placeholder="Repeat Password" name="newpsw-repeat" required>
   <button type="submit"  class="signup" id="change">Change</button>
    <button type="button" class="cancelbtn" onclick="location.href='profile.php'">Cancel</button><br>
  </div>
</form>
</div>
<div class="container">
  <h1 Style="text-align:center;color:#ADFF2F" class="animated bounceInDown">Welcome <?php echo  strtoupper($_SESSION['name1']); ?></h1><br> <br>
    <button type="button" class="btn btn-primary btn-lg btn-block animated bounceInLeft" Style="background-color:green;" onclick="document.getElementById('id04').style.display='block'">Pay the Trustees</button><br> <br>
  <div id="id04" class="modal1">
<form class="modal-content1 animate" method="POST" action="pay.php" id="feedback"> 
  <div class="container2">    
 <label><b> Please Select the Trust you want to pay:</b></label><br><br> 
 <select name="trustname" required>
 <option disabled selected value> -- Select an option -- </option>
  <option value="Mahaveer Swamy Jain Shwetamber">Sri Mahaveer Swamy Jain Shwetamber Mandir Trust</option>
  <option value="Seetharam Mandir Trust">Seetharam Mandir Trust</option>
  <option value="Sri Krishna and Asthalakshmi">Sri Krishna and Asthalakshmi Temple</option>
  <option value="World Renewal Spiritual">World Renewal Spiritual Trust</option>
  <option value="Sri Jagadguru Udaseen Ashram">Sri Jagadguru Udaseen Ashram Trust</option>
  <option value="Jain Swethamber Terapanth">Jain Swethamber Terapanth Trust</option>
  <option value="Swamy Ayyappan Temple">Swamy Ayyappan Temple</option>
  <option value="Ekambaraeshawarar Dharmaraja">Sree Ekambaraeshawarar Dharmaraja Temple</option>
  <option value="Sri Ayappa Seva Smithi">Sri Ayappa Seva Smithi</option>
  <option value="Vaidika Dharma Sahaya Sabha">Vaidika Dharma Sahaya Sabha</option>
  <option value="Sri Shuklajushyakha Trust">Sri Shuklajushyakha Trust</option>
  <option value="Sri Ravishankar Vidya Trust">Sri Ravishankar Vidya Mandir Trust</option>
  <option value="Sri Sai Spiritual Trust">Sri Sai Spiritual Centre Trust</option>
</select><br><br>
<label><b>Enter Phone Number: </b></label><br>
<input type="text" placeholder="Enter Phone Number" name="phone" required><br><br>
 <label><b>Enter Amount: </b></label><br>
<input type="number" placeholder="Enter Amount in Rupees" name="amt" min="100" required><br><br>
 <label><b>Additional Remarks (optional): </b></label>
    <textarea cols="2" rows="6" style="width:100%;" name="ta1"></textarea><br>
   <button type="submit"  class="signup" id="psub">Pay</button>
    <button type="button" class="cancelbtn" onclick="location.href='profile.php'">Cancel</button><br>
  </div>
</form>
</div>
  <button type="button"  class="btn btn-primary btn-lg btn-block animated bounceInRight"  Style="background-color:#20B2AA;" onclick="document.getElementById('id05').style.display='block'">Transaction Summary</button><br> <br>
  <div id="id05" class="modal1">
  <div class="container2"> 
    <h1 Style="text-align:center;color:maroon" class="animated bounceInDown"><b>Transaction Summary </b></h1><br>
     <div class="table-responsive"> 
  <table class="table table-hover ">
    <tr>
      <th>No.</th>
      <th>Trust Name</th>
      <th>Phone Number Used</th>     
      <th>Payment ID</th>
      <th>Date and Time</th>
      <th>Amount</th>
    </tr>
<?php
$no 	= 1;
$total 	= 0;
$email=$_SESSION['email'];
$result = mysqli_query($conn,"SELECT trust_name,buyer_phone,payment_id,date1,amount FROM pay WHERE buyer='$email'");
If (mysqli_num_rows($result)> 0) {
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td><?php echo $no; ?></td> 
            <td><?php echo $row['trust_name']; ?></td> 
            <td><?php echo $row['buyer_phone']; ?></td> 
            <td><?php echo $row['payment_id']; ?></td> 
            <td><?php echo $row['date1']; ?></td> 
            <td><?php echo $row['amount']; ?></td>
        </tr>
        <?php
  $total += $row['amount'];
			$no++; 
  }
   
}
 else {
      echo"No data Found";
    }
?>
<tr>
				<th colspan="5">TOTAL</th>
				<th><?=number_format($total)?></th>
			</tr>
  </table>
</div>
    <button type="button" class="btn btn-primary btn-lg" Style="background-color:green; margin-left:50%; "  onclick="location.href='profile.php'">ok</button><br>
  </div>
</div>
  <button type="button" class="btn btn-primary btn-lg btn-block animated bounceInLeft" Style="background-color:#B22222;" onclick="document.getElementById('id06').style.display='block'">Funds Transfer within Account</button><br> <br>
  <div id="id06" class="modal1">
<form class="modal-content1 animate" method="POST" action="transfer.php" id="transfer1"> 
  <div class="container2">    
 <label><b>From:</b></label><br>
 <?php
 $sql = "SELECT trustname,amount FROM transfer where buyer='$email' ";
$result = mysqli_query($conn,$sql);

echo "<select name='trust_name' required>";
echo"<option disabled selected value> -- Select an option -- </option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['trustname'] ."'>". $row['trustname'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Max Amount: " . $row['amount'] ."</option>";
}
echo "</select>";
 ?>
 <label><b>To:</b></label><br>
 <select name="trust_name2" required>
 <option disabled selected value> -- Select an option -- </option>
  <option value="Mahaveer Swamy Jain Shwetamber">Sri Mahaveer Swamy Jain Shwetamber Mandir Trust</option>
  <option value="Seetharam Mandir Trust">Seetharam Mandir Trust</option>
  <option value="Sri Krishna and Asthalakshmi">Sri Krishna and Asthalakshmi Temple</option>
  <option value="World Renewal Spiritual">World Renewal Spiritual Trust</option>
  <option value="Sri Jagadguru Udaseen Ashram">Sri Jagadguru Udaseen Ashram Trust</option>
  <option value="Jain Swethamber Terapanth">Jain Swethamber Terapanth Trust</option>
  <option value="Swamy Ayyappan Temple">Swamy Ayyappan Temple</option>
  <option value="Ekambaraeshawarar Dharmaraja">Sree Ekambaraeshawarar Dharmaraja Temple</option>
  <option value="Sri Ayappa Seva Smithi">Sri Ayappa Seva Smithi</option>
  <option value="Vaidika Dharma Sahaya Sabha">Vaidika Dharma Sahaya Sabha</option>
  <option value="Sri Shuklajushyakha Trust">Sri Shuklajushyakha Trust</option>
  <option value="Sri Ravishankar Vidya Trust">Sri Ravishankar Vidya Mandir Trust</option>
  <option value="Sri Sai Spiritual Trust">Sri Sai Spiritual Centre Trust</option>
</select><br>
<label><b>Enter Amount: </b></label><br>
<input type="number" placeholder="Enter Amount in Rupees" name="tamt" min="100" required><br><br>
   <button type="submit"  class="signup" id="ftsub">Submit</button>
    <button type="button" class="cancelbtn" onclick="location.href='profile.php'">Cancel</button><br>
  </div>
</form>
</div>
<button type="button" class="btn btn-primary btn-lg btn-block animated bounceInRight" Style="background-color:#4B0082;" onclick="document.getElementById('id08').style.display='block'">Funds Transfer to other Account</button><br> <br>
  <div id="id08" class="modal1">
<form class="modal-content1 animate" method="POST" action="transfertoth.php" id="transfer2"> 
  <div class="container2">    
 <label><b>From:</b></label><br>
 <?php
 $sql = "SELECT trustname,amount FROM transfer where buyer='$email' ";
$result = mysqli_query($conn,$sql);

echo "<select name='trust_name1' required>";
echo"<option disabled selected value> -- Select an option -- </option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['trustname'] ."'>". $row['trustname'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Max Amount: " . $row['amount'] ."</option>";
}
echo "</select>";
 ?><br>
 <label><b>Enter Email of other Account: </b></label><br>
<input type="email" placeholder="Enter Email" name="em1"required><br>
 <label><b>To:</b></label><br>
 <select name="trust_name22" required>
 <option disabled selected value> -- Select an option -- </option>
  <option value="Mahaveer Swamy Jain Shwetamber">Sri Mahaveer Swamy Jain Shwetamber Mandir Trust</option>
  <option value="Seetharam Mandir Trust">Seetharam Mandir Trust</option>
  <option value="Sri Krishna and Asthalakshmi">Sri Krishna and Asthalakshmi Temple</option>
  <option value="World Renewal Spiritual">World Renewal Spiritual Trust</option>
  <option value="Sri Jagadguru Udaseen Ashram">Sri Jagadguru Udaseen Ashram Trust</option>
  <option value="Jain Swethamber Terapanth">Jain Swethamber Terapanth Trust</option>
  <option value="Swamy Ayyappan Temple">Swamy Ayyappan Temple</option>
  <option value="Ekambaraeshawarar Dharmaraja">Sree Ekambaraeshawarar Dharmaraja Temple</option>
  <option value="Sri Ayappa Seva Smithi">Sri Ayappa Seva Smithi</option>
  <option value="Vaidika Dharma Sahaya Sabha">Vaidika Dharma Sahaya Sabha</option>
  <option value="Sri Shuklajushyakha Trust">Sri Shuklajushyakha Trust</option>
  <option value="Sri Ravishankar Vidya Trust">Sri Ravishankar Vidya Mandir Trust</option>
  <option value="Sri Sai Spiritual Trust">Sri Sai Spiritual Centre Trust</option>
</select><br>
<label><b>Enter Amount: </b></label><br>
<input type="number" placeholder="Enter Amount in Rupees" name="tamt1" min="100" required><br><br>
   <button type="submit"  class="signup" id="ft2sub">Submit</button>
    <button type="button" class="cancelbtn" onclick="location.href='profile.php'">Cancel</button><br>
  </div>
</form>
</div>
<button type="button"  class="btn btn-primary btn-lg btn-block animated bounceInLeft"  Style="background-color:#FFA500;" onclick="document.getElementById('id07').style.display='block'">Account Statement</button><br> <br>
<div id="id07" class="modal1">
  <div class="container2"> 
    <h1 Style="text-align:center;color:maroon" class="animated bounceInDown"><b>Account Statement</b></h1><br>
     <div class="table-responsive"> 
  <table class="table table-hover ">
    <tr>
      <th>No.</th>
      <th>Trust Name</th>
      <th>Date and Time</th>
      <th>Method</th>
      <th>Amount</th>
    </tr>
<?php
$no 	= 1;
$total 	= 0;
$email=$_SESSION['email'];
$result = mysqli_query($conn,"SELECT trustname,date,amount,method FROM transfer WHERE buyer='$email'");
If (mysqli_num_rows($result)> 0) {
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td><?php echo $no; ?></td> 
            <td><?php echo $row['trustname']; ?></td> 
            <td><?php echo $row['date']; ?></td> 
            <td><?php echo $row['method']; ?></td>
            <td><?php echo $row['amount']; ?></td>
        </tr>
        <?php
  $total += $row['amount'];
			$no++; 
  }
   
}
 else {
      echo"No data Found";
    }
?>
<tr>
				<th colspan="4">TOTAL</th>
				<th><?=number_format($total)?></th>
			</tr>
  </table>
</div>
<button type="button" class="btn btn-primary btn-lg" Style="background-color:green; margin-left:50%; "  onclick="location.href='profile.php'">ok</button><br>
  </div>
</div>
  <button type="button" class="btn btn-primary btn-lg btn-block animated bounceInRight" Style="background-color:#CD853F; margin-bottom:2%;" onclick="document.getElementById('id03').style.display='block'">Feedback</button>
  <div id="id03" class="modal1">
<form class="modal-content1 animate" method="POST" action="feedback.php" id="feedback"> 
  <div class="container2">    
 <label><b> How would you rate the support you received ? </b></label><br><br> <input type="radio" name="status" value="I am Satisfied" style="cursor:pointer;"><b> I'm Satisfied</b>
 <b style="float:right;"> I'm Unsatisfied</b> <input type="radio" name="status" value="I am Unsatisfied" style="float:right; cursor:pointer;"><br><br>
 <label><b>Add a comment about the quality of support you received (optional): </b></label>
    <textarea cols="2" rows="6" style="width:100%;" name="ta"></textarea><br>
   <button type="submit"  class="signup" id="fsub">Submit</button>
    <button type="button" class="cancelbtn" onclick="location.href='profile.php'">Cancel</button><br>
    <p class="animated bounce infinite" Style="color:red; margin-top:2%;"><b>Notice: </b></p><b Style="color:red; margin-top:2%;"> If you want to withdraw funds please mention in above text area . Your refunds with remaining funds will be Initiated.</b>
  </div>
</form>
</div>
</div>
  <script>
var modal1 = document.getElementById('id02');
var modal2 = document.getElementById('id03');
var modal3 = document.getElementById('id04');
var modal4 = document.getElementById('id05');
var modal5 = document.getElementById('id06');
var modal6 = document.getElementById('id07');
var modal7 = document.getElementById('id08');
$('#id02').click(function(e) {
    if (e.target == modal1) {
       e.stopPropagation();
    $(this).fadeOut(300);
    }
});
$('#id03').click(function(e) {
    if (e.target == modal2) {
       e.stopPropagation();
    $(this).fadeOut(300);
    }
});
$('#id04').click(function(e) {
    if (e.target == modal3) {
       e.stopPropagation();
    $(this).fadeOut(300);
    }
});
$('#id05').click(function(e) {
    if (e.target == modal4) {
       e.stopPropagation();
    $(this).fadeOut(300);
    }
});
$('#id06').click(function(e) {
    if (e.target == modal5) {
       e.stopPropagation();
    $(this).fadeOut(300);
    }
});
$('#id07').click(function(e) {
    if (e.target == modal6) {
       e.stopPropagation();
    $(this).fadeOut(300);
    }
});
$('#id08').click(function(e) {
    if (e.target == modal7) {
       e.stopPropagation();
    $(this).fadeOut(300);
    }
});
var modal2 = document.getElementById('id03');
function myFunction() {
    var r = confirm("Are you sure you want to delete your account?");
    if (r == true) {
        window.location = 'delete.php';
    } else {
         window.location = 'profile.php';
    }
}
function myFunction1() {
    var a = confirm("Are you sure you want to change your password ?");
    if (a == true) {
        window.location = 'changepassword.php';
        return true;
    } else {
         window.location = 'profile.php';
         return false;
    }
}
$(function(){ 
     var navMain = $(".navbar-collapse"); // avoid dependency on #id
     // "a:not([data-toggle])" - to avoid issues caused
     // when you have dropdown inside navbar
     navMain.on("click", "a:not([data-toggle])", null, function () {
         navMain.collapse('hide');
     });
 });


</script>

</body>
</html>
