<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "temple";
$error="";
$conn = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
