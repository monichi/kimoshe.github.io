<html>
<head>
	<title>PHP MySQL </title>
</head>
<body>
	<?php
		include  "myconnection.php";
		$id = $_GET ['id'];
		$query = "SELECT * FROM orders WHERE id=$id";
		$result = mysqli_query($connect, $query);
	?>
	<form action= "editProcess3.php" method="get">
		<table>
		<?php
			while ($row= mysqli_fetch_array($result)){
		?>
		<tr>
				<td> ID: </td>
				<td> <input type="text" name="myid" value="<?php echo $row['id'];?>" readonly> </td>
			</tr>
		<tr>
				<td> Product: </td>
				<td>
					<textarea name="myproduct" rows="5" cols="20"><?php echo $row ['product'];?> 
					</textarea>
				</td>
		<tr>
				<td> quantity: </td>
				<td> <input type="text" name="myquantity" value="<?php echo $row['quantity'];?>"> </td>
			</tr>
			<tr>
				<td> Total Amount: </td>
				<td> <input type="text" name="mytotal_amount" value="<?php echo $row['total_amount'];?>"> </td>
			</tr>
				<tr>
	          <td> Payment Method: </td>
		     <td> <input type="text" name="mypayment" value="<?php echo $row['payment'];?>"> </td>
	         </tr>
			<tr>
				<td> <input type="submit" name="save" value= "Save Changes"> </td>
			</tr>
			<?php	
				}
			?>
		</table>
	</form>
</body>
</html>