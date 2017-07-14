<!DOCTYPE HTML>
<html> 
<head> 
	<link rel="stylesheet" href="style1.css">
</head>
<title>MetalEmpirePC Register</title>
<body>
<div>
		<ul>
			<li><a href="test">Home</a></li>
		
			<li class="dropdown">
				<a href="test" class="dropbtn">PC Series</a>
				<div class="dropdown-content">
					<a href="test">Core</a>
					<a href="test">Magma</a>
					<a href="test">Titanium</a>
				</div>
			</li>
			<li><a href="test">Contact & Support</a></li>
			<li><a href="test">FAQ</a></li>
		</ul>
	</div>
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