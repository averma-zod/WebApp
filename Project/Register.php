<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="Registerstyle.css">
</head>
<body>
  <form method="POST" action="RegisterServer.php">
   <div align="center" class="header">
   	<table>
   		<thead>
   			<tr>
   			  <th class="heading" colspan="2"><h1>Register</h1></th>
            </tr>
   			<tr>
   			  <th class="text" align="left">Username</th>
              <th><input class="inp" type="text" name="name" placeholder="Enter Username"></th>
            </tr>
            <tr>
   			  <th class="text" align="left">Email</th>
              <th><input class="inp" type="email" name="email" placeholder="Enter Email"></th>
            </tr>
            <tr>
   			  <th class="text" align="left">Password</th>
              <th><input class="inp" type="password" name="password" placeholder="Enter Password"></th>
            </tr>
            <tr>
   			  <th class="text" align="left">Confirm Password</th>
              <th><input class="inp" type="password" name="cpassword" placeholder="Enter Password Again"></th>
            </tr>

            <tr>
              <th colspan="2"><input class="btn"  type="submit" name="Submit" value="Register"></th>
            </tr>
   		</thead>
   	</table>
   </div>
   <div style="height: 30px;">
   	
   </div>
   <div class="footer">
   	  <h4 align="center"><a class="link" href="www.google.com">Contact Us</a></h4>
   </div>
  </form>
</body>

</html>