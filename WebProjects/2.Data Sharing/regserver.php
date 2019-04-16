<?php
  session_start();
  $db = mysqli_connect("localhost","root","","akash") or die("Error");
  $errors = array();
  if(isset($_POST['login']))
  {
    header('location: login.php');
  }

  if(isset($_POST['register']))
  {
  	$naame = mysql_real_escape_string($_POST['name']);
  	$paassword1 = mysql_real_escape_string($_POST['password1']);
  	$paassword2 = mysql_real_escape_string($_POST['password2']);

     {
    	$sql = "SELECT * FROM id where Name = '$naame' ";
    	$query = mysqli_query($db, $sql);
    	$number = mysqli_num_rows($query);
        if($number > 0)
        {
        	 array_push($errors,'User Aready Exists');
        }
        else
        {
          if(empty($naame))
          {
            array_push($errors,'Enter Username');
          }
          if(empty($paassword1))
          {
            array_push($errors,'Enter Password');
          }
          if($paassword1 != $paassword2)
          {
    	      array_push($errors,'Two Password Do Not Match');
          }

          if(count($errors) == 0)
          {
            $password = md5("$paassword1");
    	      $sql = "INSERT INTO id(Name,Password) VALUES('$naame','$password')";
     	      mysqli_query($db , $sql);
            
    	      header('location: login.php');
    	    }
    
        }

     }
   }
?>