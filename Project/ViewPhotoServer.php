<?php 
    if(isset($_POST['back']))
      {
      	header('Location:home.php');
      }

     if(isset($_POST['Profile']))
      {
      	header('Location:timeline.php');
      }

     if(isset($_POST['Logout']))
      {
      	header('Location:login.php');
      }
?>