<?php
include("connect.php");
  include("login.php");
  $email1=$_SESSION['email'];
  $status1="";
  if (empty($_POST["status"])) {
     echo "<script language=\"JavaScript\">\n";
				echo "alert('Status is required.');\n";
                echo "window.location='profile.php'";
                echo "</script>";
  } else {
    $status1 = $_POST["status"];
  }
   $comment=$_POST['ta'];
   if(mysqli_query($conn, "INSERT INTO feedback (email,status1,comment) VALUES ('$email1','$status1','$comment')"))
			{   echo "<script language=\"JavaScript\">\n";
				echo "alert('Thank You for the Feedback.');\n";
                echo "window.location='profile.php'";
                echo "</script>";
            }
 else {
                echo "<script language=\"JavaScript\">\n";
				echo "alert('Error, Cannot save Feedback,Please Retry.');\n";
                echo "window.location='profile.php'";
                echo "</script>";
             }
  ?>