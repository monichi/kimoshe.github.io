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
   $query = "INSERT into accomplishment(name,address,status)
            VALUES('Monica Ecat','Bantay Abot','delivered'),
			      ('Kimberly Baldos','Santa','delivered')";
		 
    if(mysqli_query($connect, $query)) {
		echo "New record added successfully";
    }
	else{
	   echo "New record failed to add <br>".mysqli_error($connect);
   }
   mysqli_close($connect);
   ?>