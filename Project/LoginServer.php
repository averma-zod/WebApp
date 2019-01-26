<?php
 
  $db = mysqli_connect("localhost","root","","Details");
  if(isset($_POST['Submit']))
  {
  	$Name = $_POST['name'];
  	$Password = $_POST['password'];
    
    $sql = "SELECT * FROM Data WHERE Name='$Name'";    
    $result = mysqli_query($db,$sql);
    $number=$result->num_rows;
    
    if($number == 1)
    {
        $row = $result->fetch_assoc();
        $pass = $row["Password"];
        $Password = md5($Password);

        if($pass == $Password)
        {
        	header('Location:home.php');
        }
        else
        {
          echo "Incorrect Password";
        }
    }
    else
    {
    	echo "User Does Not Exist";
    }
  }
?>