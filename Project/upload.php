<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<style>
		body{
			background-color: black;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="upload.css">
</head>
<body>
	<h2 align="center" style="color:white">Upload Image</h2>
	<table align="center" class="table">
		<thead>
			<form method="post" action="uploadserver.php" enctype="multipart/form-data">
			<tr class="fileup">
				<th>
					<input class="button" type="file" id="image" name="image" style="padding: 8px">
				</th>
			</tr>
			<tr>
				<th align="center">
					<select style=" padding: 8px ;background-color:black; color: white;" name="category">
						<option hidden selected value="">Select Category</option>
						<option value="night">Night</option>
						<option value="nature">Nature</option>
					</select>
				</th>
			</tr>
			<tr>
				<th>
					<textarea style=" width: 98%; height: 150px; background-color:white " name="disc" placeholder="Discription"></textarea>
				</th>
			</tr>
			<tr>
				<th>
					<input type="submit" class="sub2" name="submit" value="submit" id="submit">submit</button>
				</th>
			</tr>
		</form>
</table>
</body>
</html>