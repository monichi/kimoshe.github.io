<?php 
    include "myconnection.php";
	
	$product =$_GET["myproduct"];
	$quantity = $_GET["myquantity"];
	$total_amount =$_GET["mytotal_amount"];
	$payment =$_GET["mypayment"];
	
	$query = "INSERT INTO orders(product,quantity,total_amount,payment)
             VALUE('$product','$quantity','$total_amount','$payment')";
		 
    if(mysqli_query($connect, $query)){
		echo "New record added succesfully";
	}
	else{
		echo "New record failed to add <br>". mysqli_error($connect);
	}
	mysqli_close($connect);
?>