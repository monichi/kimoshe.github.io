<?php 
 include "myconnection.php";
      
	  $id = $_GET["myid"];
     $name = $_GET["myname"];
	$address= $_GET["myaddress"];
	 $phone = $_GET["myphone"];
	$payment = $_GET["mypayment"];
	
	$query = "UPDATE customers SET name= '$name', address='$address', phone= '$phone', payment= '$payment' WHERE id=$id";
		 
    if(mysqli_query($connect, $query)){
		header('Location:homeCRUD.php');
	}
	else{
		echo "Record failed to update <br>". mysqli_error($connect);
	}
	mysqli_close($connect);
?>