<?php
session_start();
if(!isset($_SESSION["pass"]) || $_SESSION["pass"] != "yes") {
header("Location: loginpage.php");
	exit;
}
?>

<html>
<head><title>สูตรคูณ แม่
<?php echo $_GET["mul"]; ?>
</title>
</head>
<body bgcolor=#ffffdd>
<table border=1 align=center width=50%>
<?php
$m = $_GET["mul"];
for($i=1;$i<=12;$i++){
echo "<tr width=50%><td>$i * $m = </td><td>". $i * $m . "</td></tr>";
} 
?>
</table>
</html>