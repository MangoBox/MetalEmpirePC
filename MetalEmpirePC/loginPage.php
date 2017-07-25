<!DOCTYPE HTML>
<html> 
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<title>MetalEmpirePC Login</title>
<body>
	<a href = "index.php"><img src="MainLogoCompact.png" alt="Main Logo" style="width:75%;height:100%;" align = "middle"></a>
	<hr>
	<div>
		<ul>
			<li><a href="index.php"><h2>Home</h2></a></li>
		
			<li class="dropdown">
				<a class="dropbtn"><h2>PC Series</h2></a>
				<div class="dropdown-content">
					<a href="coreSeries.php"><h2 style = "color: #00b2db;">Core</h2></a>
					<a href="magmaSeries.php"><h2 style = "color: #ffbb00;">Magma</h2></a>
					<a href="titaniumSeries.php"><h2 style = "color: #db00b6;">Titanium</h2></a>
				</div>
			</li>
			<li><a href="all_reviews.php"><h2>All Reviews</h2></a></li>
			<li><a href="loginPage.php"><h2>Log In</h2></a></li>
			<li><a href="registerPage.php"><h2>Register</h2></a></li>
		</ul>
	</div>
	<hr>
	<hr>
		<div class = "center">
		<p style = "font-size: 50px"><b>Log In</b></p>
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
		<form method = "post", action="/MetalEmpirePC/user_login.php">
			<fieldset>
				<legend>Enter Login!</legend>
				<br>
				Not registered yet? <a href = "registerPage.php">Register here!</a>
				<br>
				<br>
				Username: <input type="text" name="username" color="gray">
				<br>
				<br>
				Password: <input type="password" name="password">
				<br>
				<br>
				<br>
				<input type="submit" value="Login">
			</fieldset>
			<?php
			
			?>
		</form>
	</body>
	</html>
