<!DOCTYPE HTML>
<html>
<head>
    <title>Customer Data</title>
	<link rel="stylesheet" type="text/css" href="Style2.css"/>
	<h1> CUSTOMER DATA</h1>
</head>
<body>
   <a href="insertForm.html?id=<?php;?>  ">
   <button> Add Data </button> </a> 
  <table>
     <table>
     <tr>
	     <th> ID </th>
		 <th> Name </th>
		 <th> Address </th>
		 <th> Phone Number </th>
		  <th> Payment Method </th>
	</tr>
	<?php
	 include "myconnection.php";
	 
	 $query ="SELECT * FROM customers";
	 $result = mysqli_query($connect, $query);
	
	 if(mysqli_num_rows($result) > 0){
		 while($row = mysqli_fetch_array($result)){
	?>
	<tr>
	   <td> <?php echo $row["id"]; ?> </td>
	   <td> <?php echo $row["name"]; ?> </td>
	    <td> <?php echo $row["address"]; ?> </td>
		 <td> <?php echo $row["phone"]; ?> </td>
	   <td> <?php echo $row["payment"]; ?> </td>
		
		  

	   <td> 
	       <a href="editForm.php?id=<?php echo $row["id"];?>">
		   <button> Edit </button> </a>
		   <a href="delete.php?id=<?php echo $row["id"];?>">
		   <button> Delete </button> </a>
		   
		</td>
		   
	 </tr>
	 <?php
		 }
	 }
	 else{
		 echo "0 results";
	 }
	?>
  </table>
  </body>
  </html>
	   