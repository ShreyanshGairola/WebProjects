<?php include("regserver.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="regstyle.css">
</head>
<body>
	<style>
       body{
       	background-image: url("reg.jpg");
       	background-position: top;
       }
	</style>
	<div class="header">
		<h1>Register</h1>
	</div>
    
	<form method="post" action="Register.php">
     <?php include('errors.php'); ?>
     <div class="input-group">
     	<label>Username</label>
     	<input type="text" name="name">
     </div> 

     <div class="input-group">
     	<label>Password</label>
     	<input type="password" name="password1">
     </div> 
     
     <div class="input-group">
     	<label>Confirm Password</label>
     	<input type="password" name="password2">
     </div> 
     
     <div class="input-group">
        <button type="submit" name="register" class="btn">Register</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="login" class="logbtn">Login</button>
     </div> 
 	</form>

</body>
</html>