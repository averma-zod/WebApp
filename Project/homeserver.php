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


      
      if (isset($_POST['bttn']) && $_POST['bttn']==$sname) 
      {
      	$_SESSION['naame']=$sname;
        header('Location:ViewPhoto.php');
      }
    }
 
    if(isset($_POST['searchbtn']))
    {
      if(empty($_POST['search']))
      {
        echo "Enter Photographer";
      }
      else
      {
        $_SESSION['Search'] = $_POST['search'];
        header('Location:SearchPage.php');
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
?>