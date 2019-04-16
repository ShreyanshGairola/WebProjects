<?php
  
         $Filee = $_SESSION['FaiileName'];
         $Namee = $_SESSION['Naamme'];
         $Na = $_SESSION['N'];

         echo $Na;

         $db = mysqli_connect("localhost","root","","akash");

         $query = "SELECT * FROM files WHERE FileName = '$Filee' AND Name = '$Namee'";   //query
         $sql = mysqli_query($db, $query);  
         $row = mysqli_fetch_array($sql);
  
         $fileeowner = $row['Name'];          
         $filee = $row['FileName'];
         $fileeext = $row['Fileext'];
         $fileesize = $row['FileSize']; 
         $FILE = $row['ServerName'];           

?>