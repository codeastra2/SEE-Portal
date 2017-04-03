<?php
if(!isset($_COOKIE['loggedin'])) {header("location:LoginPage.php");}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Section B Input</title>
	<link rel="stylesheet" type="text/css" href="WebStyle.css"/>
	<script type="text/javascript">
		function val()
		{
			//Validating Student Name
			var nameValidate1 = document.getElementById("name").value.search(/[a-zA-Z]+\s?\.\s?[a-zA-Z]+/);
			if(nameValidate1 == -1)
			{
				nameValidate2 = document.getElementById("name").value.search(/[A-Z]+/i);
				if(nameValidate2 == -1)
				{
					alert("Please Enter Valid Name");
					document.getElementById("name").focus();
					return false;
				}
			}

			//Validating USN 
			var usnValidate = document.getElementById("usn").value.search(/1BM14CS[0-9]{3}/i);
			if(usnValidate == -1)
			{
				alert("Please Enter Valid USN Number");
				document.getElementById("usn").focus();
				return false;
			}
		}

		function valmks(mk)
		{
			var marks=document.getElementById(mk).value;
			if(marks>100 || marks<0)
			{
					alert("Invalid marks entered");
					document.getElementById(mk).focus();
			}
		}
		function gradeval(gd)
		{
			var grade=document.getElementById(gd).value;
			if(grade>='A'&&grade<='F'||grade == 'X'||grade=='S')
			{
				;
			}
			else 
			{
				alert("Please enter valid grade");
				document.getElementById(gd).focus();
			}
		}
	</script>
</head>
<body>
	<div class="header">
		<img class="logo" src="BMSCE_logo.png"/>
		<h1 class="bms">BMS College<br/>Of Engineering</h1>
		<br/>
		<h1 class="see">SEMESTER END EXAM TERMINAL</h1>
	</div>
	<div class="content">
	<form action="saving1.php" method="POST" onsubmit="(val());">
		<center>
			<h3 class = "form">Enter the marks of the student:</h3>
		</center>
		<center>
			<p class = "input">
				<b class = "one">Name:</b>
				<label>
				 	<input type="text" id="name" name="name">
				 	</input>
				</label>
			</p>
			<p class = "input">
				<b class = "one">USN:</b>
				<label>
					<input type="text" id="usn" name="usn">
					</input>
				</label>
			</p>
			<p class = "input">
				<b class = "one">COA:</b>
				<label>
					<input type="number" id="coa" onblur="valmks('coa');" name="coa">
					</input>
				</label>&nbsp;
				<b class = "one">Coa grade:</b><label>
				    <input type="text" size="1" id="coag" name="coag" onblur="gradeval('coag');">
					</input>
				</label>	
		    </p>
		    <p class = "input">
				<b class = "one">Wp:</b>
				<label>
					<input type="number" id="wp" onblur="valmks('wp');" name="wp">
					</input>
				</label>&nbsp;
				<b class = "one">Wp grade:</b><label>
				    <input type="text" size="1" id="wpg" name="wpg" onblur="gradeval('wpg');">
					</input>
				</label>	
		    </p>
		    <p class = "input">
				<b class = "one">Math:</b>
				<label>
					<input type="number" id="math" onblur="valmks('math');" name="math">
					</input>
				</label>&nbsp;
				<b class = "one">Math grade:</b><label>
				    <input type="text" size="1" id="mathg" name="mathg" onblur="gradeval('mathg');">
					</input>
				</label>	
		    </p>
		    <p class = "input">
				<b class = "one">DS:</b>
				<label>
					<input type="number" id="ds" onblur="valmks('ds');" name="ds">
					</input>
				</label>&nbsp;
				<b class = "one">DS grade:</b><label>
				    <input type="text" size="1" id="dsg" name="dsg" onblur="gradeval('dsg')">
					</input>
				</label>	
		    </p>
		    <p class = "input">
				<b class = "one">C++:</b>
				<label>
					<input type="number" id="cplusplus" onblur="valmks('cplusplus');" name="cplusplus">
					</input>
				</label>&nbsp;
				<b class = "one">C++ grade:</b><label>
				    <input type="text" size="1" id="cplusplusg" name="cplusplusg" onblur="gradeval('cplusplusg')">
					</input>
				</label>	
		    </p>
			<p>
				<input style = "margin-left: 5px;" type="submit" id="submit" name="submit">
				</input>
			</p>
			<a href="project2.php" style = "float: left; margin-top: 2%; margin-left: 26.8%; margin-bottom: 2%;">
				<img src = "HomePage.png"/>
			</a>
			&nbsp;&nbsp;
			<a href="logout.php" style = "float: left; margin-top: 2%; margin-left: 2%; margin-bottom: 2%;">
				<img src = "LogOut.png"/>
			<br/>
			<br/>
		</center>
	</form>
	</div>
</body>
</html>