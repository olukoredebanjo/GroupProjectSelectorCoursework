<?php

     require_once('dbconfig.php');

   
     $msg = $_GET["msg"];
     $dt = date("Y-m-d H:i:s");
     $user = $_GET["name"];

     $sql="INSERT INTO `chat` (`ID`, `USERNAME`, `CHATDATE`, `MSG`) VALUES (NULL, '$user', '$dt', ' $msg');";

          echo $sql;

		$result = mysqli_query($conn, $sql);
     if(!$result)
     {
        throw new Exception('Query failed: ' . mysqli_error());
        exit();
     }

?>





