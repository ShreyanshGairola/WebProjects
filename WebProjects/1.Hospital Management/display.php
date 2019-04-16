<?php include('loginserver.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<style>
		body{
			background-image: url(a.jpg);
		}
	</style>

	<div class="header">
	    <h1>Report</h1>
    </div>

     <?php
        
         $patientname = $_SESSION['Name'];

         $sql = "SELECT * FROM patient WHERE Name = '$patientname' ";
       	 $na = mysqli_query($db, $sql);

         $row = mysqli_fetch_array($na);
         
         $naame = $row['Name'];
         $aage = $row['Age'];
         $geender = $row['Gender'];
         $blooodg = $row['BloodG'];
         $gluucosel = $row['GlucoseL'];
         $leevel = $row['Level'];
     ?>
    <form>
      <div class="input-group">
         <?php echo "$naame" ?>
      </div>

      <div class="input-group">
         <?php echo "$aage" ?>
      </div>

      <div class="input-group">
         <?php echo "$geender" ?>
      </div>

      <div class="input-group">
         <?php echo "$blooodg" ?>
      </div>

      <div class="input-group">
         <?php echo "$gluucosel" ?>
      </div>

      <div class="input-group">
         <?php if($leevel == 1):?>
         
            <strong>Low Sugar</strong>   
         
         <?php endif ?>
         <?php if($leevel == 2):?>
        
            <strong>Normal</strong>   
        
         <?php endif ?>
         <?php if($leevel == 3):?>
         
            <strong>High Sugar</strong>   
         
         <?php endif ?>

      </div>
      
    </form>
</body>
</html>