<?php include('LoginServer.php'); ?>
  <!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="Loginstyle.css">
</head>
<body>
  <form method="POST" action="Login.php">
   <div align="center" class="header">
   	<table>
   		<thead>
   			<tr>
   			  <th class="heading" colspan="2"><h1>Login</h1></th>
        </tr>
        <tr>
           <th colspan="2"><?php include('errors.php'); ?></th>
        </tr>
   			<tr>
   			  <th class="text" align="left">Username</th>
              <th><input class="inp" type="text" name="name" placeholder="Enter Username"></th>
            </tr>
            
   			  <th class="text" align="left">Password</th>
              <th><input class="inp" type="password" name="password" placeholder="Enter Password"></th>
            </tr>

            <tr>
              <th colspan="2"><input class="btn"  type="submit" name="Submit" value="Login"></th>
            </tr>
            <tr>
            	<th></th><th align="right"><font color="white">Create New Account  </font><a class="link" href="register.php"><font color="red">Register</font></a></th>
            </tr>
   		</thead>
   	</table>
   </div>
   <div style="height: 50px;">
   	
   </div>
   <div class="footer">
    <h3 align="center">
   	    <a class="link" href="www.google.com"><font color="red"> Contact Us</font></a>
      </h3>
   </div>
   </form>
</body>

</html>