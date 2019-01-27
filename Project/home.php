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

    <div class="header">
    	<table>
    		<th><button class="headerbtn">Home</button></th>
    		<th><select class="headerdrpbtn" name="Category">
    			   <option value="Abstract">Abstract</option>
    			   <option value="Light Trails">Light Trails</option>
    			   <option value="Wild Life">Wild Life</option>
    		</select></th>

    		<th width="90%"></th>

    		<th><input class="search" type="text" name="search" placeholder="Photographer"></th>
    		<th><button class="headerbtn">Search</button></th>
            <th><form method="post" action="timeline.php">
                <button  class="headerbtn" >My Profile</button></form>
            </th>
    		<th>
                <select class="headerdrpbtn" name="Setting" onchange="is(this.value)">
    			   <option disabled selected  value="">Setting</option>
    			   <option value="ActSet">Account Settings</option>
    			   <option value="Login.php">Log Out</option>
    		</select></th>
    	</table>
    </div>
    <div class="imagebody" align="center">
       <div class="images" align="center">
    	   <img class="image" style="width: 300px; height: 300px;" src="abc.jfif">
    	   <p>Name:
            <?php
             echo $_SESSION['name'];
           ?>
           </p>
    	   <p>Photographer:
            <?php
             echo $_SESSION['name'];
           ?>
           </p>
    	   <p>Category:</p>
       </div>
    </div>
</body>
</html>
<script>
    function is(src)
    {
        window.location=src;
    }
</script>