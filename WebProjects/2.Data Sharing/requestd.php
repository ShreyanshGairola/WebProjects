<?php include("requestserver.php");
include("requestdserver.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Download</title>
    <link rel="stylesheet" type="text/css" href="regstyle.css">
</head>
<body>
    <style>
      body{
        background-image: url("file.jpg");
        background-position: center;
      }
    </style>
     <div class="header">
     	<p>File</p>
     </div>
     <form method="post" action="requestd.php">
      

     <div>
      <label>File Owner</label><?php echo " - ".$fileeowner; ?>
     </div>
     <div>
     	<label>File Name</label><?php echo " - ".$filee; ?>
     </div>
     <div>
     	<label>File Size</label><?php echo " - ".$fileesize; ?>
     </div>
     <div>
     	<label>File Extension</label><?php echo " - ".$fileeext; ?>
     </div>
     <div>
     	<label>Server Name</label><?php echo " - ".$FILE; ?>
     </div>
     <div>
     	<button type="submit" name="dow" class="btn">Request</button>&emsp;&emsp;&emsp;&emsp;
     	<button type="submit" name="goback" class="btn">Go Back</button>
     </div>
       <?php
           if(isset($_POST['dow']))
           {
             $query = "INSERT INTO permission(Owner,Requester,FileName) VALUES('$Namee','$Na','$Filee')";
             $sql = mysqli_query($db, $query);
           }
        
       ?> 
     </form>
</body>
</html>


<?php
   if(isset($_POST['goback']))
   {
   	header('location: request.php');
   }
?>