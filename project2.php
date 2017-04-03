<?php
if(!isset($_COOKIE['loggedin'])) {header("location:LoginPage.php");}
?>
<!DOCTYPE  html>
<html>
<head>
	<title>Administrator page</title>
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
		<h2 class="login">Hello Admin!</h2>
		<!--
		<a href="sectionAinput.php" style="margin-left:25%" style="font-family:Bebas Neue" style="font-size:120%">
			Create marks table(A)
		</a>
		<a href="display.php" style="margin-left:25%" style="font-family:Bebas Neue" style="font-size:120%">
			View marks table(A)
		</a>
		<br/>
		<br/>
		<a href="sectionBinput.php" style="margin-left:25%" style="font-family:Bebas Neue" style="font-size:120%">
		   Create marks table(B)
		</a>
		<a href="display2.php" style="margin-left:25%" style="font-family:Bebas Neue" style="font-size:120%">
			View marks table(B)
		</a>
		-->
		<div class = "add">
			<img src = "AddMarks1.png"/>
			<a href = "sectionAinput.php">
				<img src = "SectionA.png"/>
			</a>
			<a href = "sectionBinput.php">
				<img src = "SectionB.png"/>
			</a>
			<img src = "AddMarks2.png"/>
		</div>
		<div class = "add">
			<img src = "EditMarks1.png"/>
			<a href = "Admineditainput.php">
				<img src = "SectionA.png"/>
			</a>
			<a href = "Admineditbinput.php">
				<img src = "SectionB.png"/>
			</a>
			<img src = "EditMarks2.png"/>
		</div>
		<div class = "add">
			<img src = "ViewMarks1.png"/>
			<a href = "display.php">
				<img src = "SectionA.png"/>
			</a>
			<a href = "display2.php">
				<img src = "SectionB.png"/>
			</a>
			<img src = "ViewMarks2.png"/>
		</div>

		<a href="logout.php" style = "float: left; margin-top: 2%; margin-left: 39%; margin-bottom: 2%;">
			<img src = "LogOut.png"/>
		</a>

	</div>
</body>
</html>
