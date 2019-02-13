<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<style type="text/css">
		body{
			background-color: black;
		}

		.back{
			background-color: rgba(0, 4, 35,0.7);
			margin: 20px 30%;
			border: 1px solid blue;
			padding: 10px;
			width: 40%;
			border-radius: 5px;
			color: white;
		}

		.field{
			width: 80%;
			margin-bottom: 10px;
			padding: 10px;
			border: none;
			border-radius: 5px 0px 0px 5px;
			background-color: rgb(170, 178, 238);
			color: black;
		}

		.btn{
			background-color: none;
			border: none;
			padding: 10px;
			border-radius: 0px 5px 5px 0px;
		}

		.pbtn{
			background-color: none;
			border: none;
			padding: 10px;
			border-radius: 2px;
			margin-bottom: 5px;
			width: 80px;
		}

		.pbtn:hover{
			opacity: 0.9;
			background-color: rgb(170, 178, 238);
			transition: 0.4s;
		}
	</style>
</head>
<body>
	  <?php 
        session_start();
        $name=$_SESSION['name'];
        $search=$_SESSION['Search'];
        $db = mysqli_connect("localhost","root","","Details");
        $query = "SELECT * FROM profile WHERE Name LIKE '$search%'";   //query
        $sql = mysqli_query($db, $query);
        $number = mysqli_num_rows($sql);

        if(isset($_POST['prof']))
        {
        	$_SESSION['oname'] = $_POST['prof'];
        	header('Location:otimeline.php');
        }
        else if(isset($_POST['prof']) && $_POST['prof'] == $name)
        {
        	header('Location:timeline.php');
        }

        if(isset($_POST['Search']))
        {
        	$_SESSION['Search'] = $_POST['sea'];
        	header('Location:SearchPage.php');
        }
      ?>

    
    <div class="back" align="center">
    <h2 align="center">Search Page</h2>
    <form method="POST" action="SearchPage.php">
	<table>
	<?php 
	  ?><input align="left" class="field" type="text" name="sea" placeholder="Enter Profile"><button class="btn" name="Search">Search</button><?php
	  if($number == 0)
      {
        ?>
         <td colspan="2">
        	<?php echo "No Profile Found"; ?>
         </td>
        <?php
      }
      else
      {
    ?>
	  <tr>
		<th align="left" width="429px"><h3>Profile</h3></th>
		<th></th>
   	  </tr>
       <?php 
        while($row = mysqli_fetch_array($sql))
        {
            $sname = $row['Name'];
            ?>
              <tr>
              	<td><?php echo $sname; ?></td><td><button class="pbtn" name="prof" value="<?=$sname?>">Open</button></td>
              </tr>
            <?php
        }
       }
       ?>
    </table>
    </form>
    </div>
</body>
</html>