<!DOCTYPE HTML>
<html>
<head>
    <title>Login Page</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
   <?php
      if (isset($_GET["error"])){
		  $error = $_GET["error"];
	  }
	  else{
		  $error = "";
	  }
	  $message = "";
	  if ($error=="failed"){
		  $message = "Failed to login, please login again";
	  }
	  ?>
	  <div class="loginbox">
      <img src="avatar.png" class="avatar"> 
	  <h1>Login Here</h1>
	  
	  <p style="color:red"><?php echo $message;?></p>
	  <form action="multiProcess.php" method="post">
	  <table>
	     <tr>
		     <td>Username:</td>
			 <td><input type="text" name="username" size="20"></td>
		</tr>
		 <tr>
		     <td>Password:</td>
			 <td><input type="password" name="password" size="20"></td>
		</tr>
		 <tr>
		     <td>&nbsp;</td>
			 <td><input type="submit" name="login" value="Login"></td>
		</tr>
		
		</table>
		<a href="a" > Lost your password?</a><br>
	   <a href="http://localhost/Kimoshe/register.html"> Don't have an account?</a>
	</form>
</body>
</html>