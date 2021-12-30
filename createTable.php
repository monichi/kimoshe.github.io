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
   $query = "CREATE TABLE customers (
         id INT PRIMARY KEY AUTO_INCREMENT,
         name VARCHAR(30) NOT NULL,
         address VARCHAR(255) NOT NULL,
		 phone VARCHAR(50),
		 payment VARCHAR(100))";
			 		 
    if(mysqli_query($connect, $query)) {
		echo "Customer table created successfully";
    }
	else{
	   echo "Customer failed to create <br>".mysqli_error($connect);
   }
   mysqli_close($connect);
   ?>