<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<style>
		body{
			   background-image: url(a.jpg);
			}
	</style>
	<div class="header">
         <h1>Patient Data</h1>
	</div>
   <form method="post" action="home.php" >
	<?php include("errors.php"); ?>
	<div class="input-group">
      <label>Name</label>
      <input type="text" name="pname">
	</div>
	
	<div class="input-group">
      <label>Age</label>
      <input type="text" name="page">
	</div>

	<div class="radio-group">
      <label>Gender:</label>
      <label>M</label>
      <input type="radio" name="gender" id="Male" value="Male">
      <label>F</label>
      <input type="radio" name="gender" id="Female" value="Female">
	</div>

	<div class="input-group">
      <label>Blood Group</label>
      <input type="text" name="pbg">
	</div>

	<div class="input-group">
      <label>Glucose Level</label>
      <input type="text" name="pgl">
	</div>

	<div class="input-group">
      <button type="submit" name="Submit" class="btn">Submit</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
      <button type="submit" name="Login" class="btn">Login</button>
	</div>
   </form>
</body>
</html>