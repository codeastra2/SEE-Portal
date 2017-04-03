<?php
include 'connection.php';
$flag=1;
$name = $_POST['name'];
{
      if($name=="")
	  {
		  $flag=0;
		  echo"Enter  name!"."<br/>";
	  }
	  $i=0;
	  while($i<strlen($name))
	  {
		if('a'<=$name[$i]&&$name[$i]<='z'||'A'<=$name[$i]&&$name[$i]<='Z')
		{
			$i = $i +1;
			continue;
		}
        else
		{
		//	echo $name[$i];
			$flag=0;
			break;
		}
	  }
	  if($flag == 0)
		  echo"Invalid name!"."<br/>";
}
$usn = $_POST['usn'];
	strtoupper($usn);
	if(strcmp($usn,"1BM14CS000")>0&&strcmp($usn,"1BM14CS200")<=0&&strlen($usn)==10&&substr($usn,0,7)=="1BM14CS")
	{
		$flag=1;
	}
	else{
		$flag=0;
		echo"incorrect usn!"."<br/>";
	}
$query = "SELECT * FROM `sectionamarks`";
$result = mysql_query($query);
while($arry = mysql_fetch_array($result))
{
if($arry['usn']==$usn)
{
$flag=0;
echo "Usn is already present in the table."."<br/>";
break;
}
}

$coa = $_POST['coa'];
if($coa <0 || $coa >100 || $coa=="")
{
	$flag=0;
	echo"incorrect coa marks!"."<br/>";
}
$wp = $_POST['wp'];
if($wp<0 || $wp>100|| $wp=="")
{
	$flag=0;
	echo"incorrect wp marks!"."<br/>";
}
$math = $_POST['math'];
if($math<0 || $math>100||$math=="")
{
	$flag=0;
	echo"incorrect math marks!"."<br/>";
}
$ds = $_POST['ds'];
if($ds<0 || $ds>100||$ds=="")
{
	$flag=0;
	echo"incorrect ds marks!"."<br/>";
}
$cplusplus = $_POST['cplusplus'];
if($cplusplus<0 || $cplusplus>100||$cplusplus=="")
{
	$flag=0;
	echo"incorrect C++ marks!"."<br/>";
}
$coag=$_POST['coag'];
	strtoupper($coag);
	if($coag>='A'&&$coag<='F'||$coag=='X'||$coag=='S')
	{
		;
	}
	else{
		$flag=0;
		echo"Incorrect grades!"."<br/>";
	}
$wpg=$_POST['wpg'];
strtoupper($wpg);
	if($wpg>='A'&&$wpg<='F'||$wpg=='X'||$wpg=='S')
	{
		;
	}
	else{
		$flag=0;
		echo"Incorrect grades!"."<br/>";
	}
$mathg=$_POST['mathg'];
strtoupper($mathg);
	if($mathg>='A'&&$mathg<='F'||$mathg=='X'||$mathg=='S')
	{
		;
	}
	else{
		$flag=0;
		echo"Incorrect grades!"."<br/>";
	}
$dsg=$_POST['dsg'];
strtoupper($dsg);
	if($dsg>='A'&&$dsg<='F'||$dsg=='X'||$dsg=='S')
	{
		;
	}
	else{
		$flag=0;
		echo"Incorrect grades!"."<br/>";
	}
$cplusplusg=$_POST['cplusplusg'];
strtoupper($cplusplusg);
	if($cplusplusg>='A'&&$cplusplusg<='F'||$cplusplusg=='X'||$cplusplusg=='S')
	{
		;
	}
	else{
		$flag=0;
		echo"Incorrect grades!"."<br/>";
	}
if(!$_POST['submit']){
echo "Please fill out the form";
header('Location: sectionBinput.php');
} else if ($flag==1){
	function f($a)
	{
		if($a=='S')
		{
		 return 10;	
		}
		else if($a=='A')
		{
			return 9;
		}
		else if($a=='B')
		{
			return 8;
		}
		else if($a=='C')
		{
			return 7;
		}
		else if($a=='D')
		{
			return 	6;
		}
		else if($a == 'E')
		{
			return 5;
		}
		else {
			return 0;
		}
	}
	$sum=0;
			   if($coag=='X'||$wpg=='X'||$mathg=='X'||$dsg=='X'||$cplusplusg=='X')
			   {
				   echo"You got a make-up!"."<br/>";
			   }
			   else{
				   $sum = $sum + f($coag)*4;
				   $sum = $sum + f($wpg)*6;
				   $sum = $sum + f($mathg)*4;
				   $sum = $sum + f($dsg)*5;
				   $sum = $sum + f($cplusplusg)*6;
				   $sum = ($sum/25);
			       }
	mysql_query("INSERT INTO `sectionbmarks` (`ID`, `name`, `usn`, `coa`, `wp`, `math`,`ds`,`cplusplus`,`coag`,`wpg`,`mathg`,`dsg`,`cplusplusg`,`scgpa`) 
	VALUES (NULL, '$name', '$usn','$coa','$wp','$math','$ds','$cplusplus','$coag','$wpg','$mathg','$dsg','$cplusplusg','$sum')") or die(mysql_error());
	echo "User has been Registered";
	header('Location: sectionBinput.php');
}

?>