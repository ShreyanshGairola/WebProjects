<?php
  include("homeserver.php");

  $db = mysqli_connect("localhost","root","","akash") or die("Error");
  
  $nname = $_SESSION['me'];
  if(isset($_POST["go_back"]))
  {
      header("location: home.php");
  }
  if(isset($_POST['submit']))
    {
      if(empty($_FILES['file']))
      {
        echo "Enter The File You Want To Enter";
      }
      else
      {
      $file = $_FILES['file'];
      
      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];
      
      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'mp3');

      if(in_array($fileActualExt, $allowed))
        {
            if($fileError === 0)
            {
                $query = "SELECT * FROM files WHERE Filename = '$fileName' && Name = '$nname'";
                $sql = mysqli_query($db,$query);
                $count = mysqli_num_rows($sql);
            
                if($count == 0)
                {
                   $fileNewName = uniqid('', true).".".$fileActualExt;     //main 
                   $fileDestination = 'uploads/'.$fileNewName;
                   move_uploaded_file($fileTmpName, $fileDestination);
                   
                   $query = "INSERT INTO files(Name,FileName,ServerName,Fileext,FileSize) VALUES ('$nname','$fileName','$fileNewName','$fileActualExt','$fileSize')";
                   $sql = mysqli_query($db,$query);
                   header("location: addfile.php?Success");
                }
                else
                {
                  echo "File Already Exists";
                }
               
            }
            else
            {
              echo "Error";
            }
        }
        else
        {
          echo "You Cannot Upload Files of This Types";
        }

      }
    }
 

?>