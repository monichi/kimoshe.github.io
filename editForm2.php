<html>
<head>
	<title>PHP MySQL </title>
</head>
<body>
	<?php
		include  "myconnection.php";
		$id = $_GET ['id'];
		$query = "SELECT * FROM accomplishment WHERE id=$id";
		$result = mysqli_query($connect, $query);
	?>
	<form action= "editProcess2.php" method="get">
		<table>
		<?php
			while ($row= mysqli_fetch_array($result)){
		?>
			<tr>
				<td> ID: </td>
				<td> <input type="text" name="myid" value="<?php echo $row['id'];?>" readonly> </td>
			</tr>
			<tr>
				<td> Name: </td>
				<td> <input type="text" name="myname" value="<?php echo $row['name'];?>"> </td>
			</tr>
			<tr>
				<td> Address: </td>
				<td>
					<textarea name="myaddress" rows="5" cols="20"><?php echo $row ['address'];?> 
					</textarea>
				</td>
				<tr>
	          <td> Status: </td>
		     <td> <input type="text" name="mystatus" value="<?php echo $row['status'];?>"> </td>
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