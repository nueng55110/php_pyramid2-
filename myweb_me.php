<?php
if(!isset($_SESSION["pass"]) || $_SESSION["pass"] != "yes") {
header("Location: loginpage.php");
	exit;
}
?>

<body topmargin=0 leftmargin=0>
<table width=100% bgcolor=#F0FFF0 cellspacing=0 cellpadding=0 border=0 ><tr><td align=center>
<span style="font-size:16px;" >
<br>
ประวัติส่วนตัว <br><br/><img src=image/2.jpg width=25%><br><br> นายสุรวิชญ์ สุริยะวงค ์

<br><br></span>
</td></tr></table>

