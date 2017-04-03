<!DOCTYPE  html>
<html>
<head>
	<title>Results of section b</title>
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
		<center>
			<h2 class = "results">Registered Students List</h2>
			<br/>
			<table>
				<tr class = "heading"><th rowspan = "2">Name</th><th rowspan = "2">USN</th><th colspan = "2">COA</th><th colspan = "2">WP</th><th colspan = "2">Math</th><th colspan = "2">DS</th><th colspan = "2">C++</th><th rowspan = "2">SGPA</th></tr>
				<tr class = "heading"><th>Marks</th><th>Grade</th><th>Marks</th><th>Grade</th><th>Marks</th><th>Grade</th><th>Marks</th><th>Grade</th><th>Marks</th><th>Grade</th></tr>
				<?php
					include 'connection.php';

					$query = "SELECT * FROM `sectionbmarks`";

					$result = mysql_query($query);

					while($arry = mysql_fetch_array($result)) {
						echo "<tr class = main>" . "<td>" . $arry['name'] . "</td><td>" . $arry['usn'] . "</td><td>" . $arry['coa'] . "</td><td>" . $arry['coag'] . "</td><td>" . $arry['wp'] . "</td><td>" . $arry['wpg'] . "</td><td>" . $arry['math'] . "</td><td>" . $arry['mathg'] . "</td><td>" . $arry['ds'] . "</td><td>" . $arry['dsg'] . "</td><td>" . $arry['cplusplus'] . "</td><td>" . $arry['cplusplusg'] . "</td><td>" . $arry['scgpa'] . "</td></tr>"; 
					}
				?>
			</table>
			<br/>
			<br/>
			<a href="project2.php" style = "float: left; margin-top: 2%; margin-left: 26.8%; margin-bottom: 2%;">
				<img src = "HomePage.png"/>
			</a>
			&nbsp;&nbsp;
			<a href="logout.php" style = "float: left; margin-top: 2%; margin-left: 2%; margin-bottom: 2%;">
				<img src = "LogOut.png"/>
			</a>
			<br/>
			<br/>
		</center>
	</div>
</body>
</html>