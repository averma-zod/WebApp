<?php
      include('ViewPhotoServer.php');
      session_start();
      $name=$_SESSION['naame'];

      $db = mysqli_connect("localhost","root","","Details");
      $query = "SELECT * FROM timeline WHERE ServerName = '$name'";   //query
      $sql = mysqli_query($db, $query);
   
      while($row = mysqli_fetch_array($sql))
      {
         $fname = $row['FileName'];
         $pname = $row['Name'];
         $cate = $row['Category'];
         $desc = $row['Description'];
      }
      
      $_SESSION['oname'] = $pname;
      $name = 'Uploads/'.$name;
?>
<html>
<head>
 <title> View Photo </title>
 <link rel="stylesheet" href="ViewPhotoStyle.css">
</head>
<body>
	<form method="POST" action="ViewPhoto.php">
	 <div class="header">
	 	<table>
		  <thead>
		    <th><button class="btn" name="back">Home</button></th>
		    <th width="74%;"></th>
		    <th><button class="btn" style="width: 140px" name="Profile">My Profile</button></th>
		    <th><button class="btn" name="Logout">Logout</button></th>
	      </thead>
	    </table>
	 </div>
	</form>
	<div class="tab" align="center">
	        <img border="10" style="width: 710px; height: 400px; margin: 10px 0px;" src="<?=$name ?>" />
			<table>
				<thead>
				<tr>
					<th align="left" class="text">Picture Name</th><th align="center" class="text"><?php echo $fname?></th>
				</tr>
				<tr>
					<th align="left" class="text">Photographer</th><th align="center" class="text"><a class="texxt" href="otimeline.php"><?php echo $pname?></a></th>
				</tr>
				<tr>
					<th align="left" class="text">Category</th><th align="center" class="text"><?php echo $cate?></th>
				</tr>
				<tr>
					<th align="left" class="text">Description</th><th align="center" class="text"><?php echo $desc?></th>
				</tr>
				</thead>
			</table>
    </div>
</body>
</html>