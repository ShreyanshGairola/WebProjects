<?php include('loginserver.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Retrieve</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<style>
		body{
			   background-image: url(a.jpg);
			}
	</style>
	
	<div class="header">
         <h1>Welcome</h1>
	</div>
   <form method="POST" action="login.php" >
   	<?php include('errors.php'); ?>
	<div class="input-group">
      <label>Name</label>
      <input type="text" name="pname">
	</div>
	
	<div class="input-group">
      <button type="submit" name="Submit" class="btn">Submit</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<button type="submit" name="New_Patient" class="btn">New Patient</button>
	</div>
		
   </form>
</body>
</html>