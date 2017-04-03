<?php
include 'connection.php';

$myusername = $_POST['username'];
$mypassword = $_POST['password'];

$myusername = stripslashes($myusername);
$myusername = stripslashes($myusername);
$query = "select * from login_users where userName='$myusername' and userPassword='$mypassword'";
$result=mysql_query($query);
$count= mysql_num_rows($result);

mysql_close();

if($count==1){
	$seconds=300+time();
	setcookie(loggedin,date("F jS - g:i a"),$seconds);
	header("location:project2.php");
}
else {
	echo 'Incorrect Username or Password';
}
?>