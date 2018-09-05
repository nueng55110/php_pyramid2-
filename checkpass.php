<?php
session_start();
if($_POST["u"] ==  "admin" && $_POST["p"] == "admin") { 
$_SESSION["pass"] = "yes"; 
header("Location: myweb.php");
}else {
	header("Location: loginpage.php");
}
?>
