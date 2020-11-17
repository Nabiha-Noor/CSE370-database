<?php


$servername ="localhost";
$username ="root";
$password="";
$dbname="company1";

$conn= new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed: " . $conn->connect_error);
}
else{
	mysqli_select_db($conn, $dbname);
	echo "Connection Successful  ";
}


 ?>