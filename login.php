<?php

include("dbconnect.php"); // Establishing connection with our database

if($username=($_POST["empty"]) ||$password=($_POST["empty"]))

{
    echo "Both fields are required. ";
}
else
    $username=$_POST["username"];
    $password=$_POST["password"];


    {
        header("location: home.html"); // Redirecting To another Page
    }else

    {
        echo "Incorrect username or password. ";
    }



$result->close();
$db->close();

?>