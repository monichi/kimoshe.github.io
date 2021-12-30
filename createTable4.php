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
   $query = "CREATE TABLE review (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(35) NOT NULL,
		review VARCHAR(100) NOT NULL,
		suggestion VARCHAR(100))";
		 
		 
    if(mysqli_query($connect, $query)) {
		echo "Review table created successfully";
    }
	else{
	   echo "Review failed to create <br>".mysqli_error($connect);
   }
   mysqli_close($connect);
   ?>