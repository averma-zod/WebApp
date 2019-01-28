<html>
<head>
	<title>Account Setting</title>
	<link rel="stylesheet" type="text/css" href="AccSetStyle.css">
	<style type="text/css">
	h2{
		color:white;
		text-align:center;
		padding-right:80px;

	}
	table,th,tr{
		
		color:white;
	}
	body{
		background-image: url('login.jpg');
		background-size: cover;

	}
				.aa{
			width:600px;
			height: 400px;
			background-color: rgba(0,0,0,0.7);
			margin:0 auto;
			margin-top:100px;
			padding-top:100px;
			padding-left:100px;
			border-radius:100px;
			color:white;
			font-weight:bolder;
			box-shadow:inset -4px -4px rgba(0,0,0,0.8)
		}
		.aa input[type="text"]{
			width:200px;
			height:30px;
			border:0;
			border-radius:5px;
		}
		.aa input[type="password"]{
			width:200px;
			height:30px;
			border:0;
			border-radius:5px;
		}
			.aa input[type="submit"]{
			width: 80px;
			height: 25px;
			border:0;
			border-radius: 5px;
			background-color: solid grey;
		}
    </style>
</head>
	
	<body>

	<div align="center" class="aa">
	
	<form>
		<table>
		  <thead>
		  	<tr>
		  		<th><input class="btn" type="submit" value="Home"></th>
		  		<th align="center"><h2>Account Settings</h2></th>
		  	    <th><input class="btn" type="submit" value="Log Out"></th>
		  	</tr>
		  	<tr>
		  	   <th align="right">Name</th>
		       <th><input class="text" type="text" placeholder="Enter New Name"></th>
		       <th align="left"><input class="btn" type="submit" value="Update"></th>
		    </tr>
		    <tr>
		       <th align="right">New Email</th>
		       <th><input class="text" type="text" placeholder="Enter New Email"></th>
		       <th align="left"><input class="btn" type="submit" value="Update"></th>
            </tr>
		    <tr>
			   <th align="right">Password</th>
	           <th><input class="text" type="password" placeholder="Enter Old Password"></th><th></th>
		    <tr>
			   <th></th><th><input class="text" type="password" placeholder="Enter New Password"></th><th></th>
		    </tr>
			   <th></th><th><input class="text" type="password" placeholder="Confirm New Password"></th>
		       <th align="left"><input class="btn" type="submit" value="Update"></th>
			</tr>
			
          </thead>
        </table>
     </form>
   </div>
</body>
</html>
