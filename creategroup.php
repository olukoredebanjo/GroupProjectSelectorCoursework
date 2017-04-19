<?php
include "dbconfig.php";
$group = $_POST["number_teams"];

if($group == 2){

 $sql = "create table group_2(
            id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,primary key (id))";  
         
 if(mysqli_query($conn, $sql)){  
		 
		 $sql_query = "SELECT * FROM names ORDER BY RAND()";		
		 $run_query= mysqli_query($conn, $sql_query);
			if(mysqli_num_rows($run_query) > 0){				
				$row=mysqli_fetch_array($run_query);
				$first_name = $row["name"];	
			}
		$sql_query2 = "SELECT * FROM names ORDER BY RAND()";		
		 $run_query2= mysqli_query($conn, $sql_query2);
			if(mysqli_num_rows($run_query2) > 0){				
				$row2=mysqli_fetch_array($run_query);
				$first_name2 = $row2["name"];	
			}
			
			$sql_insert = "INSERT INTO `group_2` (`id`, `name`) VALUES (NULL, '$first_name'), (NULL, '$first_name2')";
			$run_query= mysqli_query($conn, $sql_insert);
			
			header("location: home.php");
			
		 } else { 
					
			
            echo "Table is not created successfully ";  
         }  
         mysqli_close($conn);  

}


if($group == 2){

 $sql = "create table group_2(
            id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,primary key (id))";  
         
 if(mysqli_query($conn, $sql)){  
		 
		 $sql_query = "SELECT * FROM names ORDER BY RAND()";		
		 $run_query= mysqli_query($conn, $sql_query);
			if(mysqli_num_rows($run_query) > 0){				
				$row=mysqli_fetch_array($run_query);
				$first_name = $row["name"];	
			}
		$sql_query2 = "SELECT * FROM names ORDER BY RAND()";		
		 $run_query2= mysqli_query($conn, $sql_query2);
			if(mysqli_num_rows($run_query2) > 0){				
				$row2=mysqli_fetch_array($run_query);
				$first_name2 = $row2["name"];	
			}
			
			$sql_insert = "INSERT INTO `group_2` (`id`, `name`) VALUES (NULL, '$first_name'), (NULL, '$first_name2')";
			$run_query= mysqli_query($conn, $sql_insert);
			header("location: home.php");
			
		 } else { 
					
			
            echo "Table is not created successfully ";  
         }  
         mysqli_close($conn);  

}


if($group == 3){

 $sql = "create table group_3(
            id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,primary key (id))";  
         
 if(mysqli_query($conn, $sql)){  
		 
		 $sql_query = "SELECT * FROM names ORDER BY RAND()";		
		 $run_query= mysqli_query($conn, $sql_query);
			if(mysqli_num_rows($run_query) > 0){				
				$row=mysqli_fetch_array($run_query);
				$first_name = $row["name"];	
			}
		$sql_query2 = "SELECT * FROM names ORDER BY RAND()";		
		 $run_query2= mysqli_query($conn, $sql_query2);
			if(mysqli_num_rows($run_query2) > 0){				
				$row2=mysqli_fetch_array($run_query);
				$first_name2 = $row2["name"];	
			}
			
			$sql_insert = "INSERT INTO `group_3` (`id`, `name`) VALUES (NULL, '$first_name'), (NULL, '$first_name2')";
			$run_query= mysqli_query($conn, $sql_insert);
			header("location: home.php");
			
		 } else { 
					
			
            echo "Table is not created successfully ";  
         }  
         mysqli_close($conn);  

}


if($group == 4){

 $sql = "create table group_4(
            id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,primary key (id))";  
         
 if(mysqli_query($conn, $sql)){  
		 
		 $sql_query = "SELECT * FROM names ORDER BY RAND()";		
		 $run_query= mysqli_query($conn, $sql_query);
			if(mysqli_num_rows($run_query) > 0){				
				$row=mysqli_fetch_array($run_query);
				$first_name = $row["name"];	
			}
		$sql_query2 = "SELECT * FROM names ORDER BY RAND()";		
		 $run_query2= mysqli_query($conn, $sql_query2);
			if(mysqli_num_rows($run_query2) > 0){				
				$row2=mysqli_fetch_array($run_query);
				$first_name2 = $row2["name"];	
			}
			
			$sql_insert = "INSERT INTO `group_4` (`id`, `name`) VALUES (NULL, '$first_name'), (NULL, '$first_name2')";
			$run_query= mysqli_query($conn, $sql_insert);
			header("location: home.php");
			
		 } else { 
					
			
            echo "Table is not created successfully ";  
         }  
         mysqli_close($conn);  

}


if($group == 5){

 $sql = "create table group_5(
            id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,primary key (id))";  
         
 if(mysqli_query($conn, $sql)){  
		 
		 $sql_query = "SELECT * FROM names ORDER BY RAND()";		
		 $run_query= mysqli_query($conn, $sql_query);
			if(mysqli_num_rows($run_query) > 0){				
				$row=mysqli_fetch_array($run_query);
				$first_name = $row["name"];	
			}
		$sql_query2 = "SELECT * FROM names ORDER BY RAND()";		
		 $run_query2= mysqli_query($conn, $sql_query2);
			if(mysqli_num_rows($run_query2) > 0){				
				$row2=mysqli_fetch_array($run_query);
				$first_name2 = $row2["name"];	
			}
			
			$sql_insert = "INSERT INTO `group_5` (`id`, `name`) VALUES (NULL, '$first_name'), (NULL, '$first_name2')";
			$run_query= mysqli_query($conn, $sql_insert);
			header("location: home.php");
			
		 } else { 
					
			
            echo "Table is not created successfully ";  
         }  
         mysqli_close($conn);  

}



?>
