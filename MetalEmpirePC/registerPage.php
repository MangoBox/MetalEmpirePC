<!DOCTYPE HTML>
<html> 
<head> 
	<link rel="stylesheet" href="style1.css">
</head>
<title>MetalEmpirePC Register</title>
<body>
<div>
		<!-- <ul>
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
		</ul> -->
		<a href = "index.php"><img src="MainLogoCompact.png" alt="Main Logo" style="width:75%;height:100%;" align = "middle"></a>
		<div class = "center">
		<b><p style = "font-size: 50px">Register Account</p></b>
		<p>
			<?php
				session_start();
				if(isset($_SESSION["username"])) {
					echo "You are currently logged in!";
					echo "<br>Welcome, " . $_SESSION["username"] . "!<br><br>";
					echo "<a href = \"logout.php\"> Logout </a>";
				}
			?>
		</p>
	<br>
	<br>
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