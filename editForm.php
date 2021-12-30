<html>
<head>
	<title>PHP MySQL </title>
</head>
<style>
body{
  background-image: url('uno.jpg');
  background-size: cover;
  font-family: sans serif;
  font-size: 25px;
  font-weight: bolder;
  color: black;
  }
table{
margin-right:310px;
margin-top:100px;
margin-left: 150px;
border: 2px solid;
  border-radius: 20px;
}
.one{
  position: relative;
    left: 2px;
	line-height: 40px;
	width: 190px;
	border-radius: 6px;
	padding: 0 22px;
   color: black;
   font-size: 15px; 
	}
.two{
  position: relative;
    left: 2px;
	line-height: 20px;
	width: 190px;
	border-radius: 6px;
	padding: 0 22px;
   color: black;
   font-size: 20px; 
	}	
button{
	background-color: #3BAF9F;
	border-radius: 12px;
	border: 2px solid #366473;
	outline: none;
	color: white;
	cursor:pointer;
	transition:0.25px;
	font-size: 20px;
}
button:hover{
	background-color: #5390F5
}	
</style>
<body>
	<?php
		include  "myconnection.php";
		$id = $_GET ['id'];
		$query = "SELECT * FROM customers WHERE id=$id";
		$result = mysqli_query($connect, $query);
	?>
	<form action= "editprocess.php" method="get">
		<table>
		<?php
			while ($row= mysqli_fetch_array($result)){
		?>
			<tr class="one">
				<td> ID: </td>
				<td> <input type="text" name="myid" class="one" value="<?php echo $row['id'];?>" readonly> </td>
			</tr>
			<tr class="one">
				<td> Name: </td>
				<td> <input type="text" name="myname"  class="one" value="<?php echo $row['name'];?>"> </td>
			</tr>
			<tr class="two">
				<td> Address: </td>
				<td>
					<textarea name="myaddress" class="two" rows="5" cols="20"><?php echo $row ['address'];?> 
					</textarea>
				</td>
				<tr class="one">
				<td> Phone Number: </td>
				<td> <input type="text" name="myphone" class="one" value="<?php echo $row['phone'];?>"> </td>
			</tr>
			<tr class="one">
				<td> Payment Method: </td>
				<td> <input type="text" name="mypayment" class="one" value="<?php echo $row['payment'];?>"> </td>
			</tr>
			</tr>
			<tr>
				<td> <button type="submit" name="save" value= "Save Changes"> Save Changes</button></td>
			</tr>
			<?php	
				}
			?>
		</table>
	</form>
</body>
</html>