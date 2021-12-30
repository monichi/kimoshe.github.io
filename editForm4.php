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
  font-weight: border;
  color: white;
  }
table{
margin-right:310px;
margin-top:5px;
margin-left: 150px;
}
.hat{
  position: relative;
    left: 25px;
	line-height: 40px;
	width: 150px;
	border-radius: 6px;
	padding: 0 22px;
   color: black;	
	}
.hatt{
position: relative;
    left: 25px;
	line-height: 15px;
	width: 400px;
	border-radius: 6px;
	padding: 0 15px;
}
.login{background-color:rgb(0,0,0,0.5);
width: 900px;
margin-top:0px;
}
h1{
	width: 900px;
	background-color:rgb(0,0,0,6);
	color: #FFFFFF;
	padding: 10px 0px 10px 0px;
	text-align: center;
	border-radius:15px 15px 0px 0px;
	margin-top: 30px;
	}
button{
	background-color: #3BAF9F;
	border-radius: 12px;
	border: 2px solid #366473;
	padding: 14px 60px;
	outline: none;
	color: white;
	cursor:pointer;
	transition:0.25px;
	font-size: 18px;
}
button:hover{
	background-color: #5390F5
}

</style>
<body>
	<?php
		include  "myconnection.php";
		$id = $_GET ['id'];
		$query = "SELECT * FROM review WHERE id=$id";
		$result = mysqli_query($connect, $query);
	?>
	<h1>Review and Suggestion</h1>
      <div class="login">
	<form action= "editProcess4.php" method="get">
		<table>
		<?php
			while ($row= mysqli_fetch_array($result)){
		?>
		<tr>
				<td> ID: </td>
				<td> <input type="text" name="myid" class="hat" value="<?php echo $row['id'];?>" readonly> </td>
			</tr>
			<tr>
				<td> Name: </td>
				<td> <input type="text" name="myname" class="hat" value="<?php echo $row['name'];?>"> </td>
			</tr>
		<tr>
				<td> Review: </td>
				<td>
					<textarea name="myreview" class="hatt" rows="5" cols="50"><?php echo $row ['review'];?> 
					</textarea>
				</td>
				</tr>
				<tr>
				<td> Suggestion: </td>
				<td>
					<textarea name="mysuggestion" class="hatt" rows="5" cols="50"><?php echo $row ['suggestion'];?> 
					</textarea>
				</td>
		</tr>
			<tr>
				<td> <button type="submit" name="save" value= "Save Changes">Save Changes</button> </td>
			</tr>
			<?php	
				}
			?>
		</table>
	</form>
</body>
</html>