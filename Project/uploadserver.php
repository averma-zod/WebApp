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
          $query = "SELECT * FROM timeline WHERE Filename = '$fileName' && Name = '$nname'";
          $sql = mysqli_query($db,$query);
          $count = mysqli_num_rows($sql);
            
           if($count == 0)
           {
              $fileNewName = uniqid('', true).".".$fileActualExt;     //main 
              $fileDestination = 'Uploads/'.$fileNewName;
              move_uploaded_file($fileTmpName, $fileDestination);
                   
              $fileName = $_POST['filename'];
              $Category = $_POST['category'];
              $Description = $_POST['disc'];
              $query = "INSERT INTO timeline(Name,FileName,ServerName,Category,Description) VALUES ('$nname','$fileName','$fileNewName','$Category','$Description')";
              $sql = mysqli_query($db,$query);
              header("location: upload.php?Success");
           }
           else
           {
              echo "File Already Exists";
           }
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