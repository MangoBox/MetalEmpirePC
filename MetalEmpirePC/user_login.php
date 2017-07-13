<?php

	//Database connection information
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";

	//Connect to database and select relevant database.
	mysql_connect($host, $dbusername, $dbpassword) or die ("Database connection Failure.");
	mysql_select_db("MetalEmpirePC");

	//Collecting variables from superglobal variables.
	$username = $_POST['username'];
	$password = $_POST['password'];

	//SQL Injection prevention. Probably won't matter.
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

	if($result_count == 1) {
		session_start();
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		header("location: login_success.php");
	} else {
		echo "Username / Password not found!";
	}
	ob_end_flush();

?>
