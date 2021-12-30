<?php 
    include "myconnection.php";
	
	$name = $_GET["myname"];
	$review = $_GET["myreview"];
	$suggestion = $_GET["mysuggestion"];
	
	$query = "INSERT INTO review (name,review,suggestion)
             VALUE('$name','$review','suggestion')";
		 
    if(mysqli_query($connect, $query)){
		echo "New record added succesfully";
	}
	else{
		echo "New record failed to add <br>". mysqli_error($connect);
	}
	mysqli_close($connect);
?>