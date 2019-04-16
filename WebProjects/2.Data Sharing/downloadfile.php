<?php include("downloadfileserver.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Download Files</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<style >
        body{
            background-image: url("file.jpg");
            background-position: center;
        }
    </style>
	<div class="header">
		<h1>Download Files</h1>
	</div>
	<form method="post" action="downloadfile.php">
		
		<div class="input-group">
			<label>Search</label>
			&nbsp;<input type="text" name="search">&nbsp;<button type="submit" name="submit" class="btn">Go</button>
		</div>
		<?php include("errors.php"); ?>
		<div class="heading">
			<br/>
	    <strong> Your Files</strong>
	    </div>
	    
	    <div class="files">
	      <?php 
            $query = "SELECT * FROM files";   //query
            $sql = mysqli_query($db, $query);  
            $number = mysqli_num_rows($sql);
         
             echo '<br/>';

             ?>
                     <table> 
                  	 <tr>
                     <th>File Owner</th>
                     <th>File</th> 
                     </tr>
                     <tr>
             <?php
            while($row = mysqli_fetch_array($sql))
            {
              $filee = $row['FileName'];
              $fileeext = $row['Fileext'];
              $fileesize = $row['FileSize'];
              $fileowner = $row['Name'];
             
              ?>
                          <tr>
                          <td> <?php echo $fileowner; ?></td>
                          <td> <?php echo $filee; ?></td>
                          </tr>               
              <?php
            }

	      ?>
	    </div>

		<div>
			<button type="submit" name="go_back" class="btn">Go Back</button>
		</div>
	</form>
</body>
</html>