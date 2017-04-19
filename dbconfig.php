<?php
$sever = "localhost";
$username ="root";
$password ="";
$db ="groupproject";

$conn = mysqli_connect($sever, $username, $password, $db);
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}


?>