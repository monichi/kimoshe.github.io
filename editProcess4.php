<?php 
 include "myconnection.php";

    $id = $_GET["myid"];
    $name = $_GET["myname"];
	$review = $_GET["myreview"];
	$suggestion = $_GET["mysuggestion"];
	
	
	$query = "UPDATE review SET name='$name', review='$review', suggestion='$suggestion' WHERE id=$id";
		 
    if(mysqli_query($connect, $query)){
		header('Location:homeCRUD4.php');
	}
	else{
		echo "Record failed to update <br>". mysqli_error($connect);
	}
	mysqli_close($connect);
?>