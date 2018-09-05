<?php
if(!isset($_SESSION["pass"]) || $_SESSION["pass"] != "yes") {
header("Location: loginpage.php");
	exit;
}
?>

<form action=multi_do.php method=get>
<input name=mul>
<input type=submit value=click>
</form>
