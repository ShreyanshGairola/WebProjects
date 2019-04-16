<?php include("downloadfileserver.php");

   $Filee = $_SESSION['FiileName'];
   $n = $_SESSION['Namme'];

if(isset($_POST['submit']))
  {
   $seaarch = (isset($_POST['owner'])) ? $_POST['owner'] : NULL;
   $seaarch = mysql_real_escape_string($seaarch); 

   if(empty($seaarch))
   {
     array_push($errors, "Search Field Empty");
   }
   else
   { 
        $query = "SELECT * FROM files WHERE FileName = '$Filee'";   //query
        $sql = mysqli_query($db, $query);  
        $number = mysqli_num_rows($sql);
         

        while($row = mysqli_fetch_array($sql))
        {
            $namee = $row['Name'];
            $file = $row['FileName'];
            
            if($seaarch == $namee)
            { 

                $_SESSION['FaiileName'] = $file;
                $_SESSION['Naamme'] = $seaarch;
                $_SESSION['N'] = $n;

                header('location:requestd.php');
                break;
            }
          
       }
  }
}
?>