<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	mysql_connect("localhost","root","") or die ("Not connected to database!");
	
	mysql_select_db("metalempirepc") or die ("No database found!");	

	session_start();
	$username = $_SESSION["username"];
	$user_id = mysql_result(mysql_query("SELECT id FROM users WHERE username = '$username'"), 0);
	mysql_query("DELETE FROM user_reviews WHERE userID = " . $user_id);
	header("Refresh: 1; url=index.php");

?>