<?php 
    include "myconnection.php";
	
	$id = $_GET["id"];
	
	$query = "DELETE FROM review WHERE id=$id";
	
	if (mysqli_query($connect, $query)) {
		header ('Location:homeCRUD4.php');
	}
	else {
		echo "Record failed to delete <br>".
		mysqli_error($connect);
	}
	mysqli_close($connect);
?>