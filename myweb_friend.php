<?php
if(!isset($_SESSION["pass"]) || $_SESSION["pass"] != "yes") {
header("Location: loginpage.php");
	exit;
}
?>

<table width=100% bgcolor=#FFFAF0 ><tr><td align=center>
<span style="font-size:16px;" >
<br>
พี่พี<br/><img src=image/x.jpg width=25%><br><br>
บอม<br/><img src=image/Y.jpg width=25%><br><br>
เหมี่ยว<br/><img src=image/Z.jpg width=25%><br><br>
</span>
</td></tr></table>
