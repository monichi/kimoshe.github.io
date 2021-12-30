<?php 
 include "myconnection.php";
 
 $id = $_GET["myid"];
 $name = $_GET["myname"];
$address = $_GET["myaddress"];
$status = $_GET["mystatus"];

	
	$query = "UPDATE accomplishment SET name= '$name', address='$address',status='$status' WHERE id=$id";
		 
    if(mysqli_query($connect, $query)){
		header('Location:homeCRUD2.php');
	}
	else{
		echo "Record failed to update <br>". mysqli_error($connect);
	}
	mysqli_close($connect);
?>