<?php 
    include "myconnection.php";
	
	$name =$_GET["myname"];
	$address = $_GET["myaddress"];
	$status =$_GET["mystatus"];
	
	$query = "INSERT INTO accomplishment(name,address,status)
	     VALUE('$name','$address','status')";
		 
    if(mysqli_query($connect, $query)){
		echo "New record added succesfully";
	}
	else{
		echo "New record failed to add <br>". mysqli_error($connect);
	}
	mysqli_close($connect);
?>