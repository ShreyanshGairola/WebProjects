<?php  
       include("logserver.php");
       
       $name = $_SESSION['userna'];
       
       if(isset($_POST['add']))
       {
                $_SESSION['me'] = $name;
       	  header("Location: addfile.php");	  
       }

       if(isset($_POST['download']))
       {
                $_SESSION['me'] = $name;
       	  header('Location: downloadfile.php');
       }

       $query = "SELECT * FROM permission WHERE Owner = '$name' ";
       $sql = mysqli_query($db, $query);
       $count = mysqli_num_rows($sql);

       if($count != 0)
       {
         $row = mysqli_fetch_array($sql);

         $reqname = $row['Requester'];
         $file = $row['FileName'];
       }


       if(isset($_POST['allow']))
       {
                $query = "SELECT * FROM files WHERE Name = '$name' && FileName = '$file'";   //query
                $sql = mysqli_query($db, $query);  
                $row = mysqli_fetch_array($sql);
          
  
                $fileeext = $row['Fileext'];
                $fileesize = $row['FileSize']; 
                $FILE = $row['ServerName']; 


                $query = "INSERT INTO files(Name,FileName,ServerName,Fileext,FileSize) VALUES ('$reqname','$file','$FILE','$fileeext','$fileesize')";
                $sql = mysqli_query($db,$query); 

                $query = "DELETE FROM permission WHERE Requester = '$reqname' && FileName = '$file'";   //query
                $sql = mysqli_query($db, $query);  

                header('location:home.php?succes');
       }
?>