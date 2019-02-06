<?php
  session_start();
  $name = $_SESSION['name'];

  
  $db = mysqli_connect("localhost","root","","Details");
  $query = "SELECT * FROM profile WHERE Name = '$name'";   //query
  $sql = mysqli_query($db, $query);
   
  while($row = mysqli_fetch_array($sql))
  {
    $sname = $row['ServerName'];
  }

  $name = 'Profile/'.$sname;

  $pname = $_SESSION['name'];
  
 ?>
 
 <!DOCTYPE html>
<html>
<head >
	<title>Timeline</title>
	<link rel="stylesheet" type="text/css" href="timeline.css"></link>
</head>
<body>
	<table>
	<img class="profile" src="<?=$name ?>" alt="User">
	<h2 align="center" >
		<font color="white">
		<?php
         echo $pname;
		?>	
		</font>
	</h2>
	</table>
	<table  class="panel">
		<tr>
			<th width="125px;">
				<form method="post" action="upload.php">
				<button class="set" name="" style="width: 120px;">Upload</button>
			    </form>
			</th>
			<th width="890px;">
			</th>
			<th width="125px;">
				<form method="post" action="home.php">
                <button class="set" style="width: 150px;">HOME</button></form>
            </th>
			<th width="125px;" align="right">
				<select name="Setting" style="padding: 10px;color:white; background-color: black"  onchange="is(this.value)">
				<option disabled selected value="">Settings</option>
				<option value="AccSet.php">Account Settings</option>
				<option value="Login.php">Logout</option>
			</select>
			</th>
		</tr>
	</table>
	<form method="POST" action="timelineserver.php">
    <div class="back">
      <div class="imageback">
		<?php $db = mysqli_connect("localhost","root","","Details");
              $name=$_SESSION['name'];
              $query = "SELECT * FROM timeline where Name='$name'";   //query
              $sql = mysqli_query($db, $query);  
              $number = mysqli_num_rows($sql);

	            while($row = mysqli_fetch_array($sql))
              {
                  $fname = $row['FileName'];
                  $pname = $row['Name'];
                  $category = $row['Category'];
                  $name = $row['ServerName'];
                  $name = 'Uploads/'.$name;
                  ?>
                    <element class="element">
                      <button class="bttn" name="bttn" value="<?=$fname ?>" />
                  	    <img class="img" src="<?=$name ?>" />
                  	  </button>
                    </element>
                  <?php 
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