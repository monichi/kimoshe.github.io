<?php 
 include "myconnection.php";

    $id = $_GET["myid"];
    $product = $_GET["myproduct"];
	$quantity = $_GET["myquantity"];
	$total_amount = $_GET["mytotal_amount"];
	$payment = $_GET["mypayment"];
	
	
	$query = "UPDATE orders SET product='$product', quantity='$quantity', total_amount='$total_amount', payment='$payment' WHERE id=$id";
		 
    if(mysqli_query($connect, $query)){
		header('Location:homeCRUD3.php');
	}
	else{
		echo "Record failed to update <br>". mysqli_error($connect);
	}
	mysqli_close($connect);
?>