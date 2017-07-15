<?php
	//This is intended for logging users in.
	
	//Destroys the login account should the user have one.
	session_start();
	session_destroy();	

	//Checks if any of the fields are blank.
	if($_POST["username"] === '' || $_POST["password"] === '' || $_POST["password_confirm"] === '') {
		echo "One of the fields you entered was blank. Try again.";
		echoReturnToLogon();
	}

	//If the confirm password is not the same of the password field.
	if($_POST["password"] !== $_POST["password_confirm"]) {
		echo "Your confimation password does not match the original.";
		echoReturnToLogon();
	}

	//SQL Database connection.
	//Database connection information
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";

	//Connect to database and select relevant database.
	mysql_connect($host, $dbusername, $dbpassword) or die ("Database connection Failure.");
	mysql_select_db("MetalEmpirePC");

	$username = $_POST["username"];
	$password = $_POST["password"];

	//SQL Injection prevention.
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	//SQL query getting all users with the input username.
	$sql_user_query = "SELECT * FROM users WHERE username = '$username'";
	$result_user_query = mysql_query($sql_user_query);
	$result_count_user_query = mysql_num_rows($result_user_query);

	//If there is somebody existing with that username!
	if($result_count_user_query > 0) {
		echo "Crap! That username is taken already! Try again :(";
		echoReturnToLogon();
	}

	//Register the user!
	//No need to add the id as the AUTO_INCREMENT attribute does it for us.
	$sql = "INSERT INTO users (username, password)
			VALUES ('$username', '$password')";
	$query = mysql_query($sql);

	header("location: /MetalEmpirePC/loginPage.php");

	session_start();
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
	ob_end_flush();


	function echoReturnToLogon() {
		echo "<br><a href = \"registerPage.php\">Back to Register Page</a>";
		die;
	}
?>