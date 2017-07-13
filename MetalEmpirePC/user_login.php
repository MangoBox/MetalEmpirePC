<?php

	//Database connection information
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";

	//Connect to database and select relevant database.
	mysql_connect($host, $dbusername, $dbpassword) or die ("Database connection Failure.");
	mysql_select_db("MetalEmpirePC");

	//Collecting variables from superglobal variables.
	$username = $_POST["username"];
	$password = $_POST["password"];

	//SQL Injection prevention.
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	//Selecting database table and requesting data.
	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = mysql_query($sql);

	//Gets the number of users that match that request. 1 must be resulted in order to prove there
	//is a user in the table with that login information.
	$result_count = mysql_num_rows($result);
	session_start();

	//If the user appears to be already logged in!
	if(isset($_SESSION["username"])) {
		echo "You are already logged in!";
		echo "<br><a href = \"loginPage.php\">Back to Login Page</a>";
		die;
	}

	//If either of the login fields are empty.
	if($_POST['username'] === '' || $_POST['password'] === '') {
		echo "You must fill all login fields.";
		echo "<br><a href = \"loginPage.php\">Back to Login Page</a>";
		die;
	}

	//If the username field is too long (> 24 characters)
	if(strlen($_POST['username']) > 24) {
		echo "Your requested username is too long.";
		echo "<br><a href = \"loginPage.php\">Back to Login Page</a>";
		die;
	}

	//Log the user in.
	if($result_count == 1) {
		
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		header("location: login_success.php");
	} else {
		echo "Username / Password not found!";
	}
	ob_end_flush();

?>
