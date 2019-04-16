<?php
  
   if (isset($_GET['file']) && basename($_GET['file']) == $_GET['file']) 
   {
	$filename = $_GET['file'];
   } 
   else 
   {
	$filename = NULL;
   }


  if (!$filename) 
  {
	echo "File Not Found"; 
  } 
  else 
  {
	$path = 'uploads/'.$filename;
	
	if (file_exists($path) && is_readable($path)) 
	{
		// get the file size and send the http headers
		$size = filesize($path);
		header('Content-Type: application/octet-stream');
		header('Content-Length: '.$size);
		header('Content-Disposition: attachment; filename='.$filename);
		header('Content-Transfer-Encoding: binary');
		// open the file in binary read-only mode
		// display the error message if file can't be opened
		$file = @ fopen($path, 'rb');
		if ($file) 
		{
			// stream the file and exit the script when complete
			fpassthru($file);
			exit;
		} 
		else 
		{
			echo $err;
		}
	} 
	else 
	{
		echo "File Not Found";
	}
 }
?>