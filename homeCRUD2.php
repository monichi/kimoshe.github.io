<!DOCTYPE HTML>
<html>
<head>
    <title>Accomplishment Delivery Data</title>
	<link rel="stylesheet" type="text/css" href="Stylecs.css"/>
	<h1>Accomplishment Delivery Data</h1>
</head>
</head>
<body>

   <a href="insertForm2.html?id=<?php;?>  ">
   <button> Add Data </button> </a>
  <table>
     <table>
     <tr>
	     <th> ID </th>
		 <th> Name </th>
		 <th> Home Address </th>
		 <th> Status </th>
		 <th> Action </th>
	</tr>
	<?php
	 include "myconnection.php";
	 
	 $query ="SELECT * FROM accomplishment";
	 $result = mysqli_query($connect, $query);
	 
	 if(mysqli_num_rows($result) > 0){
		 while($row = mysqli_fetch_array($result)){
	?>
	<tr>
	   <td> <?php echo $row["id"]; ?> </td>
	   <td> <?php echo $row["name"]; ?> </td>
	    <td> <?php echo $row["address"]; ?> </td>
	   <td> <?php echo $row["status"]; ?> </td>
	   <td> 
	       <a href="editForm2.php?id=<?php echo $row["id"];?>">
		   <button> Edit </button> </a>
		   <a href="delete2.php?id=<?php echo $row["id"];?>">
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
	   