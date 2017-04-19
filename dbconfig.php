<?php

include "dbconnect.php";

$conn = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword, $connectstr_dbname);
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}


?>
