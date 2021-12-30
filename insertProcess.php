<?php 
    include "myconnection.php";
	
	$name = $_GET["myname"];
	$address= $_GET["myaddress"];
	$phone = $_GET["myphone"];
	$payment = $_GET["mypayment"];
	
	
	$query = "INSERT INTO customers(name,address,phone,payment)
	     VALUE('$name','$address','$phone','$payment')";
		 
    if(mysqli_query($connect, $query)){
		echo "New record added succesfully";
	}
	else{
		echo "New record failed to add <br>". mysqli_error($connect);
	}
	mysqli_close($connect);
?>