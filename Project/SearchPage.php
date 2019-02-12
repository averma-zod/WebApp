<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<style type="text/css">
		.back{
			background-color: red;
			margin: 20px 30%;
			border: 1px solid blue;
			padding: 10px;
			width: 40%;
			border-radius: 5px;
		}

		.field{
			width: 80%;
			margin-bottom: 10px;
			padding: 10px;
			border: none;
			border-radius: 5px 0px 0px 5px;
		}

		.btn{
			background-color: none;
			border: none;
			padding: 10px;
			border-radius: 0px 5px 5px 0px;
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
		<th align="left" width="429px">Name</th>
		<th>Profile</th>
   	  </tr>
       <?php 
        while($row = mysqli_fetch_array($sql))
        {
            $sname = $row['Name'];
            ?>
              <tr>
              	<td><?php echo $sname; ?></td><td><button name="prof" value="<?=$sname?>">Profile</button></td>
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