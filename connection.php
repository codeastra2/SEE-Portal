<?php
$username = "umadevi";
$password = "umadevi";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname,$username,$password) or die("Cloud not connect to data base");
$connected=mysql_select_db("cr_proj_aug_2015",$dbhandle);

?>