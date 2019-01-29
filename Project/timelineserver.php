<?php
    session_start();
    $db = mysqli_connect("localhost","root","","Details");
    $query = "SELECT * FROM timeline";   //query
    $sql = mysqli_query($db, $query);  
    $number = mysqli_num_rows($sql);
    while($row = mysqli_fetch_array($sql))
    {
      $fname = $row['FileName'];
      $sname = $row['ServerName'];
      
      if (isset($_POST['bttn']) && $_POST['bttn']==$fname) 
      {
      	$_SESSION['naame']=$sname;
        header('Location:ViewPhoto.php');
      }
    }


    if(isset($_POST['homebtn']))
    {
      header('Location:home.php');
    }

    if(isset($_POST['profilebtn']))
    {
      header('Location:timeline.php');
    }
    if(isset($_POST['Uploadbtn']))
    {
      header('Location:upload.php');
    }
?>