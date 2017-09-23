<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="logo.fw.png" sizes="32x32">
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
</head>
<title>Login and Logout</title>
<body style="background: beige;">
	<div class="all">
	
	<div class="field1">
	<center><fieldset class="field" style="width:20%; background: #008C8C">
	<form method="post" action="login.php">
		<p>SIGN IN</p>
		Username:<input type="text" name="username" placeholder="username">
		<p>Password:<input type="password" name="password" placeholder="password"></p>
		<input type="submit" value="Login" name="login" style="color: black;" class="login">
	</form>
	</fieldset></center>
	</div>
	
	<div class="field2">
	<center><fieldset style="width:20%; background: #008C8C"">
	<form method="post" action="signup.php">
	<p>SIGN UP</p>
	 Enter Username:<input type="text" name="txtname" placeholder="enter username" >
	 <p>Enter Password:<input type="password" name="txtpassword" placeholder="password">
	</p><input type="submit" value="Signup" name="signup">
	</form>
	</fieldset></center>
	</div>
	
	</div>
</body>



</html>