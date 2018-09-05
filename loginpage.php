<html>
<head>
<meta charset="UTF-8">
<title>Form Login</title>
<body background="../image/1.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>	
<center>
<body>
	<br><br><br><br>
	<div class="col-md-4" style="background-color:#f4f4f4; width:300px; height:150px;">
      <form name="frmlogin"  method="post" action="checkpass.php">
        <p> </p>
		
        <p><b><img src="../image/Lock.png" width="30" height="30" align=absmiddle> Login </b></p>
        <p> ชื่อผู้ใช้ :&nbsp;&nbsp;
          <input name="u" type="text">
        </p>
        <p>รหัสผ่าน :
          <input name="p" type="password">
        </p>
        <p>
          <button type="submit">Login</button>
          &nbsp;&nbsp;
          <br>
        </p>
      </form>
</body>
</center>
</html>