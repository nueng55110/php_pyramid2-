<?php
session_start();
if(!isset($_SESSION["pass"]) || $_SESSION["pass"] != "yes") {
header("Location: loginpage.php");
	exit;
}
?>

<?php
include("myweb_header.php");
include("nueng_all.php");
include("myweb_footer.php");
?>
