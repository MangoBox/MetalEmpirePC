<!DOCTYPE HTML>
<html> 
<head> 
	<link rel="stylesheet" href="style1.css">
</head>
<title>MetalEmpirePC Register</title>
<body>
	<br>
	<h1 title="test">MetalEmpirePC Register</h1>
	<br>
	Want to log in? <a href =  "/MetalEmpirePC/loginPage.php"> Click here! </a>
	<form method = "post", action="/MetalEmpirePC/user_register.php">
		<fieldset>
			<legend>Enter register Information</legend>

			Username: <input type="text" name="username" color="gray" required size=24>
			<br>
			<br>
			Password: <input type="password" name="password" required>
			<br>
			<br>
			Confirm Password: <input type="password" name="password_confirm" required>
			<br>
			<br>
			<input type="submit" value="Register">
		</fieldset>
	</form>
</body>
</html>