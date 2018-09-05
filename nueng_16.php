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

for($nueng_row=1;$nueng_row<=5;$nueng_row++) {
	
	for($nueng_col=$nueng_row;$nueng_col>=1;$nueng_col--){
		echo($nueng_col);
	}
	for($nueng_col=1;$nueng_col<=5-$nueng_row;$nueng_col++){
		echo("  ");
	}
	for($nueng_col=$nueng_row;$nueng_col>=1;$nueng_col--){
		echo("*");
	}
	echo "<br/>";
}
?>
</pre>