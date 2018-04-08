<?php
include("connect.php"); 
    include("login.php");
 $email1 = $_SESSION['email'];
    if(mysqli_query($conn, "DELETE from log  WHERE email='$email1'"))
			{   echo "<script language=\"JavaScript\">\n";
				echo "alert('Deleted the account successfully.');\n";
                echo "window.location='index.php'";
                echo "</script>";
            }
            else {
                echo "<script language=\"JavaScript\">\n";
				echo "alert('Error, Cannot delete the account.');\n";
                echo "window.location='profile.php'";
                echo "</script>";
             }
                  
    ?>