<?php
 session_start();
 $errors = array();
 $db = mysqli_connect("localhost","root","","data");

 if($db)
 {
 	echo "";
 }
 else
 {
 	die("Connection Failed".mysqli_connect_error());
 }
 
 if(isset($_POST['New_Patient']))
 {
   header('location: home.php');
 }

 if(isset($_POST['Another_Patient']))
 {
   header('location: login.php');
 }
 
 if(isset($_POST['Submit']))
 {
 	$name = mysql_real_escape_string($_POST['pname']);
 	if(empty($name))
 	{
 		array_push($errors,"Enter Patient Name");
 	}
   
   if(count($errors) == 0)
   {
   	    $query = "SELECT * FROM patient WHERE Name = '$name' ";
   	    $sql = mysqli_query($db, $query);
   	    $count = mysqli_num_rows($sql);
        
        
   	    if($count == 0)
   	    {
   	    	 array_push($errors,"No Patient Found");
        }
        else
        {
        	 $_SESSION['Name'] = $name;
           $_SESSION['Count'] = $count;
           header ('location: display.php');
        }
   }
 }
?>