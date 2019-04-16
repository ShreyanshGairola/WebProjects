<?php include('addfileserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Files</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<style>
		body{
			background-image: url("file.jpg");
            background-position: center;
		}
	</style>
	<div class="header">
		<h1>Add Files</h1>
	</div>
	<form action="addfileserver.php" method="post" enctype="multipart/form-data">
		<label><strong>&emsp;<?php echo $nname ?></strong></label><br/>
        <input class="field" type="file" name="file" id="file">
        &emsp;&emsp;&emsp;<button type="submit" name="submit" class="btn">Upload</button>
        <br/><br/><br/>
        <button type="submit" name="go_back" class="btn">Go Back</button>
	</form>
</body>
</html>