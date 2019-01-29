<?php
  session_start();
?>
  <!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
   
</head>
<body>
	<div class="heading">
        <h1 align="center"><font color="white">Project</font></h1>
    </div>
   <form method="POST" action="homeserver.php">
    <div class="header">
    	<table>
    		<th><button name="homebtn" class="headerbtn">Home</button></th>
    		<th><select class="headerdrpbtn" name="Category">
    			   <option value="All">All</option>
    			   <option value="Abstract">Abstract</option>
    			   <option value="Landscape">Landscape</option>
    			   <option value="Light Trails">Light Trails</option>
    			   <option value="Wild Life">Wild Life</option>
    		</select></th>

    		<th width="90%"></th>
            
    		<th><input class="search" type="text" name="search" placeholder="Photographer"></th>
    		<th><button class="headerbtn">Search</button></th>
            <th>
                <button style="width: 120px;" name="profilebtn" class="headerbtn" >My Profile</button></form>
            </th>
    		<th>
                <select class="headerdrpbtn" name="Setting" onchange="is(this.value)">
    			   <option disabled selected  value="">Settings</option>
    			   <option value="AccSet.php">Account Settings</option>
    			   <option value="Login.php">Log Out</option>
    		</select></th>
    	</table>
    </div>
    <div  align="center">
       <div class="images" align="center">
    	   <?php
    	        $db = mysqli_connect("localhost","root","","Details");
    	        $name=$_SESSION['name'];
                $query = "SELECT * FROM timeline";   //query
                $sql = mysqli_query($db, $query);  
                $number = mysqli_num_rows($sql);
                if($number>10)
                {
                  for($i=0;$i<10;$i++)
                  {
                    $fname = $row['FileName'];
                    $pname = $row['Name'];
                    $category = $row['Category'];
                    ?>
                    <div align="center" class="imageback">
                    <?php
                     echo $fname;
                     $name = $row['ServerName'];
                     $name = 'Uploads/'.$name;
                     ?>
                     <button name="bttn" value="<?=$fname ?>" />
                       <img class="img" style="width: 710px; height: 400px; margin: 10px 0px;" src="<?=$name ?>" />
                     </button>
                     <font>Photographer:</font><?php echo $pname?><br>
                     <font>Category:</font><?php echo $category?><br>
                    </div>
                    <?php	
                  }
                }
                else
                {
                  while($row = mysqli_fetch_array($sql))
                  {
                  	$fname = $row['FileName'];
                  	$pname = $row['Name'];
                  	$category = $row['Category'];
                  	?>
                  	<div align="center" class="imageback">
                  	<?php
                  	 echo $fname;
                  	 $name = $row['ServerName'];
                     $name = 'Uploads/'.$name;
                  	 ?>
                     <button name="bttn" value="<?=$fname ?>" />
                  	   <img class="img" style="width: 710px; height: 400px; margin: 10px 0px;" src="<?=$name ?>" />
                  	 </button>
                  	 <font>Photographer:</font><?php echo $pname?><br>
                  	 <font>Category:</font><?php echo $category?><br>
                  	</div>
                  	<?php 
                  }
                }
    	   ?>
       </div>
    </div>
    </form>
</body>
</html>
<script>
    function is(src)
    {
        window.location=src;
    }
</script>