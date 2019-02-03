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
			<form method="post" action="uploadserver.php" enctype="multipart/form-data">
			<tr>
				<th colspan="2"><h2 align="center" style="color:white">Upload Image</h2></th>
			</tr>
			<tr class="fileup">
				<th colspan="2"><input class="button" type="file" id="file" name="file" style="padding: 8px"></th>
			</tr>
			<tr>
				<th><font color="white">Name</font></th><th><input class="text" placeholder="Enter Filename" type="text" name="filename"></th>
			</tr>
			<tr>
				<th><font color="white">Category</font></th>
				<th align="center">
					<select class="drpbtn" style=" padding: 8px ;background-color:black; color: white;" name="category">
						<option hidden selected value="">Select Category</option>
						<option value="Abstract">Abstract</option>
						<option value="Animal">Animal</option>
						<option value="Light Trails">Light Trails</option>
						<option value="Landscape">Landscape</option>
						<option value="Mountains">Mountains</option>
						<option value="Random">Random</option>
					</select>
				</th>
			</tr>
			<tr>
		      <th colspan="2"><textarea style=" width: 340px; height: 150px; background-color:white " name="disc" placeholder="Description"></textarea></th>
			</tr>
			<tr>
				<th><button class="sub2" name="Profile" value="Profile" >Profile</button></th><th><button type="submit" class="sub2" name="submit" value="submit" id="submit">Submit</button></th>
			</tr>
		</form>
</table>
</body>
</html>