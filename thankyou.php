<?php
 include("connect.php");
 include("login.php");
$payid = $_GET["payment_id"];
$payreq = $_GET["payment_request_id"];
        header('Refresh: 5; URL=profile.php');
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
      
    <title>Thank You</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container">
      <h1 style="color:#6da552"><b>Thank You <?php echo  strtoupper($_SESSION['name1']); ?>, Payment success!!</b></h1>
  
<?php
echo "payement id-";
        echo $payid. "<br>";
        echo "request id-";
        echo $payreq. "<br>";
?>
 


      
    </div> <!-- /container -->


  </body>
</html>