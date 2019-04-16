<?php
  include("homeserver.php");
  $errors = array();
  $flag = 0;

  $db = mysqli_connect("localhost","root","","akash") or die("Error");

  $nname = $_SESSION['me'];

  if(isset($_POST['go_back']))
  {
  	header('location:home.php');
  }

  
  if(isset($_POST['submit']))
  {
   $seaarch = (isset($_POST['search'])) ? $_POST['search'] : NULL;
   $seaarch = mysql_real_escape_string($seaarch); 

   if(empty($seaarch))
   {
   	 array_push($errors, "Search Field Empty");
   }
   else
   { 
		    $query = "SELECT * FROM files";   //query
        $sql = mysqli_query($db, $query);  
        $number = mysqli_num_rows($sql);
         

        while($row = mysqli_fetch_array($sql))
        {
            $namee = $row['Name'];
            $file = $row['FileName'];
            
            if($seaarch == $file)
            {
                 if($nname == $namee)
                 { 
                   $flag = 0;
                   break;
                 }
                 else
                 {
                   $flag = 1;
                 }
            }
            else
            {  
              echo "No File Found";
            }
        }
        if($flag === 1)
        {
          $_SESSION['FiileName'] = $seaarch;
          $_SESSION['Namme'] = $nname;
          header('location: request.php');
        }
        else
        {

        	$_SESSION['FiileName'] = $seaarch;
          $_SESSION['Namme'] = $nname;
          header('location: downloading.php');
        }
    }
  }

?>