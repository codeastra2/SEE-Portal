<!DOCTYPE html>
<html>
<head>
	<title>Admin editb input</title>
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
			<form action="editbinput.php" method="POST">
				<b class = "one">USN:&nbsp;</b>
				<input type="text" name="usn"></input>
				<br/>
				<br/>
				<!--<b>Password:&nbsp;</b>
				<input type="password" name="password"></input>
				<br/>-->
				<br/>
				<input type="Submit" value="Login"/>
			</form>
		</div>
	</div>
</body>
</html>