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
   $query = "INSERT into review(name,review,suggestion)
            VALUES('Monica', 'I love the coffee and cake','I like to suggest')";
		
		 
    if(mysqli_query($connect, $query)) {
		echo "New record added successfully";
    }
	else{
	   echo "New record failed to add <br>".mysqli_error($connect);
   }
   mysqli_close($connect);
   ?>