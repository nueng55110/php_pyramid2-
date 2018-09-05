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


for($nueng_row=1;$nueng_row<=7;$nueng_row++) {
	for($nueng_col=0;$nueng_col<=7-$nueng_row;$nueng_col++) {
	echo(" ");
	}
	for($nueng_col=1;$nueng_col<=1;$nueng_col++){
		echo($nueng_col);
	}
	for($nueng_col=3;$nueng_col<=1+$nueng_row;$nueng_col++){
		echo($nueng_col-1);
	}
		echo($nueng_row);
	for($nueng_col=$nueng_row;$nueng_col>=1;$nueng_col--){
		echo($nueng_col);
	}
	echo "<br/>";
}
?>
</pre>