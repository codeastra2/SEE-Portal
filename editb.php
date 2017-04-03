<?php
include 'connection.php';
$flag=0;
$usn = $_POST['usn'];
$name= $_POST['name'];
$coa=$_POST['coa'];
$wp=$_POST['wp'];
$math=$_POST['math'];
$ds=$_POST['ds'];
$cplusplus=$_POST['cplusplus'];
$coag=$_POST['coag'];
$wpg=$_POST['wpg'];
$mathg=$_POST['mathg'];
$dsg=$_POST['dsg'];
$cplusplusg=$_POST['cplusplusg'];
$query = "SELECT * FROM `sectionbmarks`";
$result = mysql_query($query);
while($arry = mysql_fetch_array($result))
{
    if($arry['usn']==$usn)
        {
        	$ID=$arry['ID'];
            $flag=1;
            break;
        }
}
if($flag==1)
{ 
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
			       echo  $ID."<br/>";
			mysql_query("UPDATE `sectionbmarks`
			             SET `name`='$name',`coa`='$coa',`wp`='$wp',`math`='$math',`ds`='$ds',`cplusplus`='$cplusplus',`coag`='$coag',`wpg`='$wpg',`mathg`='$mathg',`dsg`='$dsg',`cplusplusg`='$cplusplusg',`scgpa`='$sum'			        
				         WHERE `sectionbmarks`.`ID`=$ID ") or die(mysql_error());      
	header('Location: display2.php');
}
else 
{
	echo"Invalid USN!";
	header('Location: editbinput.php');
}
?>