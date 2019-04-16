<?php
  session_start(); 
  $errors = array();
  $db = mysqli_connect("localhost","root","","akash") or die("Error");
  
  if(isset($_POST['register']))
  {
  	header('location: register.php');
  }

  if(isset($_POST['submit']))
  {
    $naame = (isset($_POST['username'])) ? $_POST['username'] : NULL;
    $paasword = (isset($_POST['userpassword'])) ? $_POST['userpassword'] : NULL;

  	$naame = mysql_real_escape_string($naame);
  	$paasword = mysql_real_escape_string($paasword);
    
  	$query = "SELECT * FROM id WHERE Name = '$naame' ";
   	$sql = mysqli_query($db, $query);
   	$count = mysqli_num_rows($sql);
    
    if(empty($naame))
    {
    	array_push($errors,"Enter Name");
    }   
    if(empty($paasword))
    {
    	array_push($errors,"Enter Password");
    }   
    if(count($errors) == 0)
    {
        if($count == 0)
  	    {
  	        array_push($errors,"User Does Not Exist");
  	    }
  	    else
  	    {
           $row = mysqli_fetch_array($sql);

           $namee = $row['Name'];
           $passwordd = $row['Password'];

           $password = md5($paasword);

           if($passwordd == $password)
           {
              $_SESSION['userna'] = $namee;
              header('location: home.php'); 
           }
           else
           {
           	  array_push($errors,"Wrong Password");
           }
     	}
    }
  }
?>