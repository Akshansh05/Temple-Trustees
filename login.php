<?php
include("connect.php");
session_start();
 function email_exists($email, $conn)
	{
		$result = mysqli_query($conn,"SELECT * FROM log WHERE email='$email'");
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
if( isset($_POST['email']))
{ 
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['psw']);
$checkBox=isset($_POST['keep']);


if (email_exists($email,$conn)) {
    $result=mysqli_query($conn,"select password from log where email='$email'");
    $rpassword=mysqli_fetch_assoc($result);
     if (!password_verify($password,$rpassword['password'])) {
  echo "<script language=\"JavaScript\">\n";
echo "alert('Username or Password was incorrect!');\n";
echo "window.location='index.php'";
echo "</script>";
}
else { 
    $res=mysqli_query($conn,"select * from log where email='$email'");
    $row=mysqli_fetch_assoc($res);
while(mysqli_num_rows($res) == 1){
				$_SESSION['username'] = $row['userName'];
				$_SESSION['name1'] =$row['name'];
                $_SESSION['email'] = $email;
                header("location: profile.php");
}
if($checkBox)
				{
					setcookie("email",$email, time()+3600);
				}
				header("location: profile.php");
			}
    }
    else {
       echo "<script language=\"JavaScript\">\n";
echo "alert('Username or Password was incorrect!');\n";
echo "window.location='index.php'";
echo "</script>"; 
    }
}

?>