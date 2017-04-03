<?php
$seconds = -10 +time();
setcookie(loggedin,date("F js -g:i a"),$seconds);
header("location:LoginPage.php");
?>
