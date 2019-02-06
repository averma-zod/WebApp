<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
    <?php 
      session_start();
      $name=$_SESSION['name'];
      $search=$_SESSION['Search'];
      echo $name;
      echo $search;
    ?>
</body>
</html>