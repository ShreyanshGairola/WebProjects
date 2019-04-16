<?php
  include("downloadfileserver.php");
  $flag =
  
  $Filee = $_SESSION['FiileName'];
  $Namee = $_SESSION['Namme'];
  $db = mysqli_connect("localhost","root","","akash");
  

  $query = "SELECT * FROM files WHERE Name = '$Namee' && FileName = '$Filee'";   //query
  $sql = mysqli_query($db, $query);  
  $row = mysqli_fetch_array($sql);
  
  $fileeowner = $row['Name'];          
  $filee = $row['FileName'];
  $fileeext = $row['Fileext'];
  $fileesize = $row['FileSize']; 
  $FILE = $row['ServerName'];           

?>

<style>
	body{
		background-image: url("file.jpg");
		background-position: center;
	}
</style>

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
        background-position: bottom;
      }
    </style>
     <div class="header">
     	<p>File</p>
     </div>
     <form method="post" action="">
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
     	<button type="submit" name="dow" class="btn">Download</button>&emsp;&emsp;&emsp;&emsp;
     	<button type="submit" name="goback" class="btn">Go Back</button>&emsp;&emsp;&emsp;&emsp;&nbsp;
     	<button type="submit" name="delete" class="btn">Delete</button>
     </div>
       <?php
           if(isset($_POST['dow']))
           {
             echo "<a href='download.php?file=".$FILE."'>Download</a> ";
           }
        
       ?> 
     </form>
</body>
</html>


<?php
  if(isset($_POST['delete']))
   {
    $query = "DELETE FROM files WHERE Name = '$Namee' && FileName = '$Filee'";   //query
    $sql = mysqli_query($db, $query);
    unlink( "uploads/".$FILE);
    header('location:downloadfile.php');
   }
   if(isset($_POST['goback']))
   {
   	header('location: downloadfile.php');
   }
?>