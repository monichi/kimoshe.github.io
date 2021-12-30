<!DOCTYPE HTML>
<html>
<head>
    <title>Orders and Billing Data</title>
	<link rel="stylesheet" type="text/css" href="styleCss3.css"/>
	<h1>Orders and Billing Data</h1>
</head>
</head>
<body>
   <a href="insertForm3.html?id=<?php;?>  ">
   <button> Add Data </button> </a>
  <table>
     <table>
     <tr>
	     <th> ID </th>
		 <th> Product Name</th>
		 <th> Quantity </th>
		 <th> Total Amount</th>
		 <th> Payment Method</th>
		 <th> Action </th>
	</tr>
	<?php
	 include "myconnection.php";
	 
	 $query ="SELECT * FROM orders";
	 $result = mysqli_query($connect, $query);
	 
	 if(mysqli_num_rows($result) > 0){
		 while($row = mysqli_fetch_array($result)){
	?>
	<tr>
	   <td> <?php echo $row["id"]; ?> </td>
	   <td> <?php echo $row["product"]; ?> </td>
	    <td> <?php echo $row["quantity"]; ?> </td>
	   <td> <?php echo $row["total_amount"]; ?> </td>
	   <td> <?php echo $row["payment"]; ?> </td>
	   <td> 
	       <a href="editForm3.php?id=<?php echo $row["id"];?>">
		   <button> Edit </button> </a>
		   <a href="delete3.php?id=<?php echo $row["id"];?>">
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
	   