<?php

   $db = mysqli_connect("localhost","root","","details") or die("Error");
   $errors = array();
   if(isset($_POST['Submit']))
   {
    if(empty($_POST['name']))
    {
      echo "enter Name";
    }
    else
    {
   	 $Name = $_POST['name'];
   	 $Email = $_POST['email'];
   	 $Password = $_POST['password'];
   	 $Cpassword = $_POST['cpassword'];
 
     $sql = "SELECT * FROM Data WHERE Name='$Name'";    
     $result = mysqli_query($db,$sql);
     $number=$result->num_rows;
     
     if($number == 0)
     { 
        if($Password == $Cpassword)
        {
           $Password = md5($Password);
           $sql="INSERT INTO Data(Name,Email,Password) VALUES ('$Name','$Email','$Password')";
           mysqli_query($db, $sql);

           $sql="INSERT INTO Profile(Name,ServerName) VALUES ('$Name','New.png')";
           mysqli_query($db, $sql);
           header('Location:Login.php');
        }
        else
        {
           array_push($errors,'Password Do Not Match');
        }
     }
     else
     {
        array_push($errors,'User Already Exist');
     }
    }
   }
?>