<?php
  $nam=$_SESSION['name']; 

  $db = mysqli_connect("localhost","root","","Details");
  $query = "SELECT * FROM data WHERE Name = '$nam'";   //query
  $sql = mysqli_query($db, $query);
   

  while($row = mysqli_fetch_array($sql))
  {
    $password = $row['Password'];
  }

 $errors = array();
 if(isset($_POST['homebtn'])){
 	header('Location:home.php');
 }

 if(isset($_POST['profilebtn']))
 {
 	header('Location:timeline.php');
 }

 if(isset($_POST['NUpdate']))
 {
 	$newna=$_POST['newname'];
 	if(empty($_POST['newname']))
 	{
       array_push($errors,'Enter New Name');
 	}
 	else
 	{
     $sql = "SELECT * FROM Data WHERE Name='$nam'";    
     $result = mysqli_query($db,$sql);
     $number=$result->num_rows;
     if($number == 0)
     {
 	    $_SESSION['name']=$newna;
      $query = "UPDATE profile SET Name = '$newna' WHERE Name = '$nam';";
      $sql = mysqli_query($db, $query);

      $query = "UPDATE data SET Name = '$newna' WHERE Name = '$nam';";
      $sql = mysqli_query($db, $query);

      $query = "UPDATE timeline SET Name = '$newna' WHERE Name = '$nam';";
      $sql = mysqli_query($db, $query);
    }
    else
    {
      array_push($errors,'User Already Exists');
    }
 	}
 }

 if(isset($_POST['EUpdate']))
 {
 	$newemail=$_POST['newemail'];
 	if(empty($_POST['newemail']))
 	{
       array_push($errors,'Enter New Email');
 	}
 	else
 	{
      $query = "UPDATE data SET Email = '$newemail' WHERE Name = '$nam';";
      $sql = mysqli_query($db, $query);
 	}
 }

 if(isset($_POST['PUpdate']))
 {
 	$oldpass=$_POST['oldpass'];
 	$newpass=$_POST['newpass'];
 	$newcpass=$_POST['newcpass'];

 	if(empty($_POST['oldpass']))
 	{
       array_push($errors,'Enter Old Password');
 	}
 	else if(empty($_POST['newpass']))
 	{
       array_push($errors,'Enter New Password');
 	}
 	else if(empty($_POST['newcpass']))
 	{
       array_push($errors,'Enter New Password Again');
 	}
 	else
 	{
 	   if($newcpass === $newpass)
 	   {
 	   	 $oldpass = md5($oldpass);
 	   	 if($oldpass === $password)
 	   	 {
 	   	 	$newpass = md5($newpass);
 	   	 	$query = "UPDATE data SET Password = '$newpass' WHERE Name = '$nam';";
            $sql = mysqli_query($db, $query);
 	   	 }
 	   	 else
 	   	 {
 	   	 	array_push($errors,'Password Does Not Match');
 	   	 }
 	   }
 	   else
 	   {
 	   	 array_push($errors,'Password Does Not Match');
 	   }
 	}
 }

?>