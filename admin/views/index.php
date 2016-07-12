<html>
	<head>
		<title> Login Page</title>
		<link rel="stylesheet" type="text/css" href="../css/login.css">
	</head>
<script src="../js/login.js"></script>
<body >

<div id="box">
	<form action="../controller/accessfile.php" method="post" id="form">
		<p id="err" ><?php echo $_GET["msg"]?></p>
		<h2>Login User</h2>
		 
		<img src="../images/user.jpg" height="20" width="20" title="Login Id">
		<input type="text" name="lgid" id="lgid" class="textbox" onclick="clean()" onkeypress="clean()">
		<img src="../images/key.png" height="20" width="20" title="Password">
		<input type="password" name="lgpass" id="lgpass"  class="textbox" onclick="clean()" onkeypress="clean()">
		<img src="../images/submit.jpg" height="35" width="75" title="Submit" class="img" onclick="myFun()">
	</form>
</div>

</body>
</html>