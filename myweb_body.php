
<?php
if(!isset($_SESSION["pass"]) || $_SESSION["pass"] != "yes") {
header("Location: loginpage.php");
	exit;
}
?>

<table width=100% bgcolor=pink><tr><td align=center>
<span style="font-size:16px;">
<br>
<img src= image/3.jpg width=25%><br><br>
<a href = nueng_all1.php >Pyramid 36</a><br><br>

</span>
</td></tr></table>
