<?php
session_start();
if(!isset($_SESSION["pass"]) || $_SESSION["pass"] != "yes") {
header("Location: loginpage.php");
	exit;
}
?>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;];font-size:20px;">
<table width=100% bgcolor=#FFFAF0 ><tr><td align=center>
<span style="font-size:16px;" >
<?php


for($nueng_row=0;$nueng_row<=4;$nueng_row++) {
	echo($nueng_row+1);
	echo("*");
	for($nueng_col=1;$nueng_col<=1;$nueng_col++){
		echo($nueng_col+$nueng_row+$nueng_row);
	}
	echo("*");
	for($nueng_col=2;$nueng_col<=2;$nueng_col++){
		echo($nueng_col+$nueng_row+$nueng_row);
	}
	echo "<br/>";
}
?>
</pre>