	<?php

if(!isset($_SESSION["pass"]) || $_SESSION["pass"] != "yes") {
header("Location: loginpage.php");
	exit;
}
?>

<table width=100% bgcolor=#EE82EE ><tr><td align=center>
<span style="font-size:16px;" >
<br> แม่สูตรคูณ <br><br>

<?php
include("multi_form.php");
?>
</span>
</td></tr></table>
