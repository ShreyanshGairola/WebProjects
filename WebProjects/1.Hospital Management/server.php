<?php
  session_start();
  $errors = array();
  $db= mysqli_connect("localhost","root","","data") or die("Error");
  
  if(isset($_POST['Login']))
  {
  	header("location: Login.php");
  }


  if(isset($_POST['Submit']))
  {
  	$name=mysql_real_escape_string($_POST['pname']);
  	$age=mysql_real_escape_string($_POST['page']);
  	$gender=mysql_real_escape_string($_POST['gender']);
  	$bloodg=mysql_real_escape_string($_POST['pbg']);
  	$glucosel=mysql_real_escape_string($_POST['pgl']);

    if(empty($name))
    {
       array_push($errors,"Enter Patient Name");
    }
    if(empty($age))
    {
       array_push($errors,"Enter Patient Age");
    }
    if(empty($gender))
    {
       array_push($errors,"Select Patient Gender");
    }
    if(empty($bloodg))
    {
       array_push($errors,"Enter Patient Blood Group");
    }
    if(empty($glucosel))
    {
       array_push($errors,"Enter Patient Glucose Level");
    }
    

    

  	$lvl=0;

    if($glucosel < 140 && $glucosel > 80)
    {
      $lvl=2;
    }
  	if($glucosel > 140)
    {
      $lvl=3;
    }
    if($glucosel < 80)
    {
      $lvl=1;
    }

    if(count($errors) == 0)
    {

   	    $query = "SELECT * FROM patient WHERE Name = '$name' ";
   	    $sql = mysqli_query($db, $query);
   	    $count = mysqli_num_rows($sql);
        
        
   	    if($count != 0)
   	    {
   	    	 array_push($errors,"Patient Already Exists");
        }
        else
        {
  		  $sql="INSERT INTO patient(Name,Age,Gender,BloodG,GlucoseL,Level) VALUES('$name','$age','$gender','$bloodg','$glucosel','$lvl')";
  		  mysqli_query($db,$sql);
          header ('location: login.php');
        }
      
    }    
  }
?>