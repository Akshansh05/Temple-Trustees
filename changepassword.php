<?php
include("connect.php"); 
	include("login.php");
 if(isset($_POST['newpsw1']))
	{  
		$password = $_POST['newpsw1'];
		$confirmPassword = $_POST['newpsw-repeat'];
		if(strlen($password) < 8)
		{
			echo "<script language=\"JavaScript\">\n";
            echo "alert('Password must be greater than 8 characters');\n";
            echo "window.location='profile.php'";
			echo "</script>";
			
		}
		else if($password !== $confirmPassword)
		{
			echo "<script language=\"JavaScript\">\n";
            echo "alert('Password does not match');\n";
            echo "window.location='profile.php'";
            echo "</script>";
		}
		else
		{
			$password = password_hash($password,PASSWORD_DEFAULT);
			$email = $_SESSION['email'];
			if(mysqli_query($conn, "UPDATE log SET password='$password' WHERE email='$email'"))
			{   echo "<script language=\"JavaScript\">\n";
				echo "alert('Password changed successfully.Please login to continue');\n";
                echo "window.location='index.php'";
                echo "</script>";
			}
		}
	}

 ?>
 