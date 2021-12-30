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
   $query = "INSERT into customers(name,address,phone,payment)
            VALUES('Monica Ecat','Narvacan, Ilocos Sur','09568108137','Cash on delivery')";
			      
		 
    if(mysqli_query($connect, $query)) {
		echo "New record added successfully";
    }
	else{
	   echo "New record failed to add <br>".mysqli_error($connect);
   }
   mysqli_close($connect);
   ?>