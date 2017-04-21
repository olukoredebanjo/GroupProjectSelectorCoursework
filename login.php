<?php

include("dbconnect.php"); // Establishing connection with our database

if($username=($_POST["empty"]) ||$password=($_POST["empty"]))

{
    echo "Both fields are required. ";
}
else {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select uid from users where username='$username' and password='$password';";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1) {
        header("location: home.php"); // Redirecting To another Page
    } else {
        echo "Incorrect username or password. ";
    }
}

$result->close();

$db->close();

?>
