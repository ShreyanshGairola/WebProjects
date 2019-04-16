<?php include('homeserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="regstyle.css">
</head>
<body>
    <div class="header">
    	<h1>Welcome</h1>
    </div>
    <style >
        body{
            background-image: url("file.jpg");
            background-position: center;
        }
    </style>
    <form method="post" action="home.php">

    	<div>
    		<label><strong>&emsp;<?php echo $name ?></strong></label><br/>
    		&emsp;<button type="submit" name="add" class="btn">Add Files</button>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    		<button type="submit" name="download" class="btn">Download Files</button>
    	</div>
    </form>

   
        <div class="header">
            <label>Share File</label>
        </div>
        <form method="post" action="home.php">
         <table>
            <tr>
            <td><?php 
               if($count != 0)
               {
                echo $reqname ?><label> is asking for </label><?php echo $file ?></td><td><button type="submit" name="allow" class="btn">Allow</button></td>
            <?php } ?>
            </tr>
         </table>
        </form>

    
</body>
</html>