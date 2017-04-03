<!DOCTYPE html>
<html>
<head>
	<title>admin Login Page</title>
	<link rel="stylesheet" type="text/css" href="WebStyle.css"/>
</head>
<body>
	<div class="header">
		<img class="logo" src="BMSCE_logo.png"/>
		<h1 class="bms">BMS College<br/>Of Engineering</h1>
		<br/>
		<h1 class="see">SEMESTER END EXAM TERMINAL</h1>
	</div>
	<div class="content">
		<h2 class="login">Login</h2>
		<br/><br/>
		<div class="studlog">
			<form action="login.php" method = "POST">
<p> <b>Username:</b> <input type="text" name="username" placeholder="Username"/></p>
<p> <b>Password: </b><input type="password" name="password" placeholder="Password"/></p>
<input type="submit" value="Login">
		</div>
	</div>
</body>
</html>