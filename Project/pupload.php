<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<style>
		body{
			background-image: url('back.jpg');
			background-size: cover;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="upload.css">
</head>
<body>
	<table align="center" class="table">
		<thead>
			<form method="post" action="puploadserver.php" enctype="multipart/form-data">
			<tr>
				<th colspan="2"><h2 align="center" style="color:white">Upload Image</h2></th>
			</tr>
			<tr class="fileup">
				<th colspan="2"><input class="button" type="file" id="file" name="file" style="padding: 8px"></th>
			</tr>
			
			<tr>
				<th><button class="sub2" name="Profile" value="Profile" >Profile</button></th><th><button type="submit" class="sub2" name="submit" value="submit" id="submit">Submit</button></th>
			</tr>
		</form>
</table>
</body>
</html>