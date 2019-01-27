<?php

   $db = mysqli_connect("localhost","root","","details") or die("Error");

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
           header('Location:Login.php');
        }
        else
        {
           echo "Password Do Not Match";
        }
     }
     else
     {
       echo "User Already Exist";
     }
    }
   }
?>