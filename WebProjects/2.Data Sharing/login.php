<?php include("logserver.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="regstyle.css">
</head>
<body>
	
	<style>
		body{
			background-image: url('reg.jpg');
			background-position: top;
		}
	</style>
	
      <div class="header">
	   	 <h1>Login</h1>
	  </div>
    
    <form method="post" action="login.php">
    	
	 <?php include('errors.php'); ?> 
	  <div class="input-group">
         <label>Username</label>
         <input type="text" name="username">
      </div>

      <div class="input-group">
         <label>Password</label>
         <input type="password" name="userpassword">
      </div>
    
      <div class="input-group">
         <button type="submit" name="submit" class="btn">Submit</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;<button type="submit" name="register" class="btn">Register</button>
      </div>

    </form>
</body>
</html>