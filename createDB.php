<?php 
   $hostname = "localhost";
   $username = "root";
   $password = "";
   
   $connect = mysqli_connect($hostname, $username, $password);
   
   if($connect) {
	   echo "Connection to MySQL successful<br>";
   }
   else{
	   echo "Connection to MySQL failed". mysqli_connect_error();
   }
   $query = "CREATE DATABASE web_db";
   if(mysqli_query($connect, $query)) {
	   echo"Database created successfully";
   }
   else{
	   echo "Database failed to create <br>".mysqli_error($connect);
   }
   mysqli_close($connect);
   ?>