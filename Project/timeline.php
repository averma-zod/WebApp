<?php
  session_start();
  ?>
  <!DOCTYPE html>
<html>
<head >
	<title>Timeline</title>
	<style>
		h2 {
			background-color: black;
			margin-bottom: 0px;
			border: 2px solid grey;
			border-collapse: collapse;
		}
		body{
			background-color: black;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="timeline.css"></link>
</head>
<body>
		<img class="profile" src="abc.JFIF" alt="User">
	
	<h2 align="center" ><font color="white">
		<?php
		echo $_SESSION['name'];
		?>	
		</font></h2>
	<table  class="panel">
		<tr>
			<td></td>
			<th width="8%">
				<button class="set" >Your photos</font></button>
			</th>
			<th width="8%">
				<button class="set" >Photos liked</font>
			</th>
			<th width="24%">
				<form id="form" method="post" action="upload.php" enctype="multipart/form-data" target="iframe">
				<input class="new" type="file" id="file" name="Add a file">
				<input type="submit" id="submit" name="submit" value="Upload">
			</form>
			</th>
			<th  width="8%"><form method="post" action="home.php">
                <button class="set">HOME</button></form>
            </th>
			<th width="52%" align="right">
				<select name="Setting" style="padding: 10px;color:white; background-color: black"  onchange="is(this.value)">
				<option disabled selected value="">Settings</option>
				<option value="acc">account setting</option>
				<option value="Login.php">log out</option>
			</select>
			</th>
		</tr>
	</table>
	<iframe style="display: all;" class="midline" name="iframe">
	</iframe>

</body>
</html>

<script>
    function is(src)
    {
        window.location=src;
    }
</script>