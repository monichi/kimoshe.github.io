<!DOCTYPE HTML>
<html>
<head>
    <title>Review Data</title>
	<link rel="stylesheet" type="text/css" href="styleCss4.css"/>
	<h1>Review Data</h1>
</head>
</head>
<body>
   <a href="insertForm4.html?id=<?php;?>  ">
   <button> Add Data </button> </a>
  <table>
     <table>
     <tr>
	     <th> ID </th>
		 <th> Name</th>
		 <th> Review</th>
		 <th> Suggestion </th>
		 <th> Action </th>
	</tr>
	<?php
	 include "myconnection.php";
	 
	 $query ="SELECT * FROM review";
	 $result = mysqli_query($connect, $query);
	 
	 if(mysqli_num_rows($result) > 0){
		 while($row = mysqli_fetch_array($result)){
	?>
	<tr>
	   <td> <?php echo $row["id"]; ?> </td>
	   <td> <?php echo $row["name"]; ?> </td>
	    <td> <?php echo $row["review"]; ?> </td>
	   <td> <?php echo $row["suggestion"]; ?> </td>
	   <td> 
	       <a href="editForm4.php?id=<?php echo $row["id"];?>">
		   <button> Edit </button> </a>
		   <a href="delete4.php?id=<?php echo $row["id"];?>">
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
	   