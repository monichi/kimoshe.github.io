<?php 
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $database = "web_db";
   
   $connect = mysqli_connect($hostname, $username, $password, $database);
   
   if($connect) {
	   echo "Connection to MySQL successful<br>";
   }
   else{
	   echo "Connection to MySQL failed". mysqli_connect_error();
   }
   $query = "CREATE TABLE orders (
        id INT PRIMARY KEY AUTO_INCREMENT,
        product VARCHAR(30) NOT NULL,
		quantity INT (11),
		total_amount INT(10),
		payment VARCHAR(100))";
		 
		 
    if(mysqli_query($connect, $query)) {
		echo "Orders table created successfully";
    }
	else{
	   echo "Orders failed to create <br>".mysqli_error($connect);
   }
   mysqli_close($connect);
   ?>