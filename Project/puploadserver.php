<?php

 include('Loginserver.php');
 $nname=$_SESSION['name'];
 $db = mysqli_connect("localhost","root","","Details") or die("Database not connected");
 
 if (isset($_POST['Profile']))
 {
   header('Location:timeline.php');
 }

 if (isset($_POST['submit'])) 
 {
  if(empty($_FILES['file']))
  {
    echo "Enter The File You Want To Enter";
  }
  else
  {
      $file = $_FILES['file'];
      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];
      
      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('jpg', 'jpeg', 'png');

      if(in_array($fileActualExt, $allowed))
      {
        if($fileError === 0)
        {
              $fileNewName = uniqid('', true).".".$fileActualExt;     //main 
              $fileDestination = 'Profile/'.$fileNewName;
              move_uploaded_file($fileTmpName, $fileDestination);
              $query = "UPDATE profile SET ServerName = '$fileNewName' WHERE Name = '$nname';";
              $sql = mysqli_query($db,$query);
              header("location: pupload.php?Success");
        }
        else
        {
          echo "Error";
        }
      }
      else
      {
          echo "You Cannot Upload Files of This Types";
      }
     }
}
?>