<?php
include "dbconfig.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>group project team selector</title>


</head>
<body style="background-image:url('backdrnd.jpg')">
<div id="main" class="container">


    <h1>Group Project Team Generator</h1>

    <p>Enter a list of names, pick the number of teams you want, and select create group to assign people randomly to teams!</p>

    <form action="creategroup.php" method="post" id="form">
        <div class="name-container">
            <label for="names">Add names (one per line)</label>
            <textarea name="names" id="names" cols="30" rows="10" placeholder="Add Names">Tom
Bob
Johnny
Sam
Jemima
Henry
Sandra
Ian
Molly
Bello</textarea>
        </div>

        <div class="options">
            <label for="number_teams">Number of groups</label>
            <select name="number_teams" id="number_teams">
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
             
            </select>
			
			<br /> 
       

        <input type="submit" value="create group" class="submit">
		
		</form>
		&nbsp;&nbsp;&nbsp;
		<form action = "" method="POST" >
		
            <label for="team_names">Base team names on:</label>
            <select name="team_names" id="team_names">
                <option value="group_2">group_2</option>
				<option value="group_3">group_3</option>
				<option value="group_4">group_4</option>
				<option value="group_5">group_5</option>
                
            </select>
			<input type="submit" name= "submit_btn" value="Show group members" class="submit">
			</form>
			 </div>
       
		<?php 
		
		if(isset($_POST["submit_btn"])){
		$_POST["team_names"];
		
		
		if($_POST["team_names"]== "group_2"){
			echo "<div class='output'><h3> Group members are</h3>
		<hr />";
		$sql_query2 = "SELECT * FROM `group_2` WHERE 1";		
		 $run_query2= mysqli_query($conn, $sql_query2);
			if(mysqli_num_rows($run_query2) > 0){				
				while ($row2=mysqli_fetch_array($run_query2)){
				$first_name = $row2["name"];	
				$id = $row2["id"];
		
		
		echo "<h4> Name: $first_name</h2><h4> ID : $id </h4>";
		echo "<a href='chat.php?name=".$first_name."' >Chat with $first_name</a>";
		}
		}
		echo "</div>";
		}
	if($_POST["team_names"]== "group_3"){
			echo "<div class='output'><h3> Group members are</h3>
		<hr />";
		$sql_query2 = "SELECT * FROM `group_3` WHERE 1";		
		 $run_query2= mysqli_query($conn, $sql_query2);
			if(mysqli_num_rows($run_query2) > 0){				
				while ($row2=mysqli_fetch_array($run_query2)){
				$first_name = $row2["name"];	
				$id = $row2["id"];
		
		
		echo "<h4> Name: $first_name</h2><h4> ID : $id </h4>";
		echo "<a href='chat.php?name=".$first_name."' >Chat with $first_name</a>";
		}
		}
		echo "</div>";
		}
		
if($_POST["team_names"]== "group_4"){
			echo "<div class='output'><h3> Group members are</h3>
		<hr />";
		$sql_query2 = "SELECT * FROM `group_4` WHERE 1";		
		 $run_query2= mysqli_query($conn, $sql_query2);
			if(mysqli_num_rows($run_query2) > 0){				
				while ($row2=mysqli_fetch_array($run_query2)){
				$first_name = $row2["name"];	
				$id = $row2["id"];
		
		echo "<h4> Name: $first_name</h2><h4> ID : $id </h4>";
		echo "<a href='chat.php?name=".$first_name."' >Chat with $first_name</a>";
		}
		}
		echo "</div>";
		}
if($_POST["team_names"]== "group_5"){
			echo "<div class='output'><h3> Group members are</h3>
		<hr />";
		$sql_query2 = "SELECT * FROM `group_5` WHERE 1";		
		 $run_query2= mysqli_query($conn, $sql_query2);
			if(mysqli_num_rows($run_query2) > 0){				
				while ($row2=mysqli_fetch_array($run_query2)){
				$first_name = $row2["name"];	
				$id = $row2["id"];
		
		echo "<h4> Name: $first_name</h2><h4> ID : $id </h4>";
		echo "<a href='chat.php?name=".$first_name."' >Chat with $first_name</a>";
		}
		
		}
		echo "</div>";
		}
		}
    ?>
    <script src="//ssl.google-analytics.com/ga.js"></script><script src="https://pagead2.googlesyndication.com/pub-config/r20160913/ca-pub-3863319475191168.js"></script><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- team-gen-resp -->
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>


    <!--Script to Create Group-->
    <script>
        jQuery(document).ready(function($) {
            $('#form').submit(function() {

                var output = $('#output');
                output.html('<img src="/static/flask/img/loading.gif" alt="Loading..." />');

                var formData = $(this).serialize();
                var url = '/team-generator/generate';

                $.post(url, formData, function(data, textStatus) {
                    var keys = [];
                    for(var key in data) {
                        keys.push(key);
                    }
                    keys.sort();

                    output.html("<h2>Teams:</h2>");

                    for(var i = 0; i < keys.length; i ++) {
                        output.append('<h3 class="team-name">' + keys[i] + '</h3><ul>');
                        for(var j = 0; j < data[keys[i]].length; j++) {
                            output.append('<li>' + data[keys[i]][j] + '</li>');
                        }
                        output.append('</ul>');
                    }

                }, 'json')
                    .fail(function(xhr, textStatus, errorThrown) {
                        output.html('<span class="error">There was a problem generating the teams. Please try again.</span>');
                    });

                return false;
            });
        });
    </script>

</div>
</body>
</html>
