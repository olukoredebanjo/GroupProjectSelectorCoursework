<?php

     require_once('db.php');

     db_connect();
     $pic="";
	 $pic='<img src="user-icon.jpg" width="20" height="20"/>';
      
     $sql = "SELECT *, date_format(chatdate,'%d-%m-%Y %r') as cdt from chat order by ID desc limit 200";
     $sql = "SELECT * FROM (" . $sql . ") as ch order by ID";
     $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
     // Update Row Information
     $msg="<table border='0' style='font-size: 10pt; color: blue; font-family: verdana, arial;'>";
     while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
     {
           $msg = $msg . "<tr><td>" . $pic . "&nbsp;</td>" .
                "<td>" . $line["USERNAME"] . ":&nbsp;</td>" .
                "<td>" . $line["MSG"] . "</td></tr>";
     }
     $msg=$msg . "</table>";
     
     echo $msg;

?>





