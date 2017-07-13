<!DOCTYPE HTML>
<html> 
<head>
	<link rel="stylesheet" href="style1.css">
</head>
<title>MetalEmpirePC Login</title>
<body>
	<br>
	<?php
	session_start();
	if(isset($_SESSION["username"])) {
		echo "You are currently logged in!";
		echo " Welcome, " . $_SESSION["username"] . "!";
	}

	?>
	<h1 title="test">MetalEmpirePC Login</h1>
	Want to register? <a href =  "/MetalEmpirePC/registerPage.php"> Click here! </a>
	<form method = "post", action="/MetalEmpirePC/user_login.php">
		<fieldset>
			<legend>Enter Login!</legend>

			Username: <input type="text" name="username" color="gray">
			<br>
			<br>
			Password: <input type="password" name="password">
			<br>
			<br>
			<input type="submit" value="Login">
		</fieldset>
		<?php
		if(isset($_SESSION["username"])) {
			echo "<a href = \"logout.php\"> Logout </a>";
		}
		?>
	</form>
</body>
</html>