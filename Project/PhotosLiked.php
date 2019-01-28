<?php
  session_start();
  ?>
  <!DOCTYPE html>
<html>
<head>
	<style>
	body{
		background-image: url(pic.jpg);
		height: 
	}
</head>
<body>
	<table>
		<tr>
			<p>Name:
            <?php
             $name=  $_SESSION['name'];
             echo $name;
           ?>
           </p>
       </tr>
	</table>
	</body>