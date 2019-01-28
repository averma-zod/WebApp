<?php
session_start();
$db = mysqli_connect("localhost","root","","Details") or die("Database not connected");
if (isset($_POST['submit'])) {
	# code...
	
		$name=$_SESSION['name'];
		$image=addslashes($_FILES['image']['tmp_name']);
		$imagename=addslashes($_FILES['images']['tname']);
		$image=file_get_contents($image);
		$image=base64_encode($image);
		$category=$_POST['category'];
		$disc=$_POST['disc'];

		$query=mysqli_query($db,"INSERT into fileupload(name,image,imagename,category,disc)values('$name','$image','$imagename','$category','$disc')");
		?>
		<script>
			window.alert("Record saved");
		</script>
		<?php

}
?>