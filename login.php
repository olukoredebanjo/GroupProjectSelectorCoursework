<?php

include("dbconnect.php"); // Establishing connection with our database

if($username=($_POST["empty"]) ||$password=($_POST["empty"]))

{
    echo "Both fields are required. ";
}
else
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql = "SELECT uname FROM users WHERE username='$username' and pss='$password'; ";
    $result = mysqli_query($db,$sql);

    if( mysqli_num_rows($result) == 1)    // If Successful Login

    {
        header("location: home.php"); // Redirecting To another Page
    }else

    {
        echo "Incorrect username or password. ";
    }



$result->close();
$db->close();

?>