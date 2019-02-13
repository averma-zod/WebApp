<?php 
  include('LoginServer.php');
  include('AccSetServer.php');
  $nam=$_SESSION['name']; 

  $db = mysqli_connect("localhost","root","","Details");
  $query = "SELECT * FROM profile WHERE Name = '$nam'";   //query
  $sql = mysqli_query($db, $query);
   
  while($row = mysqli_fetch_array($sql))
  {
    $sname = $row['ServerName'];
  }

  $name = 'Profile/'.$sname;
?>
<html>
<head>
	<title>Account Settings</title>
	<link rel="stylesheet" type="text/css" href="AccSetStyle.css">
</head>
<body> 
  <form method="POST" action="AccSet.php">
  
  <div class="header">
  	<table>
      <thead>
  	    <th><button class="hdbtn" name="homebtn">Home</button></th> <th style="color: white; font-size: 20px; font-family:arial;padding: 10px;" width="92%">Account Settings</th><th><button name="profilebtn" class="hdbtn">Profile</button></th>
      </thead>
    </table>
  </div>
  
  <div align="center" class="table">	
		<table>
		  <thead>
		  	<tr>
		  		<th colspan="3"><img class="profile" src="<?=$name ?>" alt="User"></th>
		  	</tr>
		  	<tr>
		  		<th colspan="3"><a class="t" href="pupload.php">Change Image</a></th>
		  	</tr>
		  	<tr>
		  		<th colspan="3"><font color="white"><?php echo $nam; ?></font></th>
		  	</tr>
		  	<tr height="20px;">
		        
		  	</tr>
		  	<tr style="height: 50px;">
		  		<th align="left" width="120px;"><font color="white">Name</font></th><th><input class="textbox" type="text" name="newname" placeholder="Enter New Name"></th><th><button class="btn" name="NUpdate">Update</button></th>
		  	</tr>
		  	<tr style="height: 50px;">
		  		<th align="left" width="120px;"><font color="white">Email</font></th><th><input class="textbox" type="text" name="newemail" placeholder="Enter New Email"></th><th><button class="btn" name="EUpdate">Update</button></th>
		  	</tr>
		  	<tr>
		  		<th align="left" width="120px;"><font color="white">Password</font></th><th><input class="textbox" type="text" name="oldpass" placeholder="Enter Old Password"></th><th></th>
		  	</tr>
		  	<tr>
		  		<th></th><th><input class="textbox" type="text" name="newpass" placeholder="Enter New Password"></th><th></th>
		  	</tr>
            <tr>
		  		<th></th><th><input class="textbox" type="text" name="newcpass" placeholder="Enter New Password Again"></th><th><button class="btn" name="PUpdate">Update</button></th>
		  	</tr>
		  </thead>
        </table>
    </div>
   </form>
</body>
</html>
