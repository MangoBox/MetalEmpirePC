<!DOCTYPE HTML>
<html> 
<head>
	<link rel="stylesheet" href="style1.css">
</head>
<title>MetalEmpirePC Login</title>
<body>
	<br>
	<a href = "index.php"><img src="MainLogoCompact.png" alt="Main Logo" style="width:75%;height:100%;" align = "middle"></a>
		<div class = "center"><b><p>
			<?php
				session_start();
				if(isset($_SESSION["username"])) {
					echo "You are currently logged in!";
					echo "<br>Welcome, " . $_SESSION["username"] . "!<br><br>";
					echo "<a href = \"logout.php\"> Logout </a>";
				}
			?>
		</p></b></b>
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