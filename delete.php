<?php 
    include "myconnection.php";
	
	$id = $_GET["id"];
	
	$query = "DELETE FROM customers WHERE id=$id";
	
	if (mysqli_query($connect, $query)) {
		header ('Location:homeCRUD.php');
	}
	else {
		echo "Record failed to delete <br>".
		mysqli_error($connect);
	}
	mysqli_close($connect);
?>