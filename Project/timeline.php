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
	
	<h2 align="center" >
		<font color="white">
		<?php
		   echo $_SESSION['name'];
		?>	
		</font>
	</h2>
	<table  class="panel">
		<tr>
			<th width="125px;">
				<button class="set" style="width: 120px;">Your photos</font></button>
			</th>
			<th width="125px;">
				<button class="set" style="width: 120px;">Photos liked</font>
			</th>
			<th width="125px;">
				<button class="set" style="width: 120px;">Upload</font>
			</th>
			<th width="720px;">
			</th>
			<th width="125px;">
				<form method="post" action="home.php">
                <button class="set" style="width: 150px;">HOME</button></form>
            </th>
			<th width="125px;" align="right">
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