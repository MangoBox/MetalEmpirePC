<?php
	session_start();
	if(!isset($_SESSION["username"])) {
		echo "You are currently not logged in. Log in to post a review.";

	}
	
	//Checking if any of the input fields are empty.
	if($_POST["rating"] === '' || $_POST["title"] === '' || $_POST["review_text"] === '' || $_POST["product_select"] === 'Select a Product') {
			echo "You have not filled in one of the fields. Try again.";
			echoReturnToLogon();
	}	
	
	
	//Database connection information
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";

	//Connect to database and select relevant database.
	mysql_connect($host, $dbusername, $dbpassword) or die ("Database connection Failure.");
	mysql_select_db("MetalEmpirePC");
	
	$sql_user_query = "SELECT * FROM users WHERE username = '$_SESSION[\"username\"]'";
	$query_user = mysql_query($sql_user_query);
	
	mysql_result(mysql_query("SELECT * FROM users_reviews WHERE "),0);
	
	
	$sql_review_query = "INSERT INTO users (username, password)
						VALUES ('$username', '$password')";
	
	
	$rating = 1;
	for($i = 1; $i <= 5; $i++) {
		$rating_string = "rating" . $i;
		if($_POST["rating"] === $rating_string) {
			global $rating;
			$rating = $i;
		}
	}
	
	//Rating is now the clamped integer value between 1 and 5.
	echo $rating;





	function echoReturnToLogon() {
		echo "<br><a href = \"registerPage.php\">Previous Page</a>";
		//Dodgy, but it works so whatever.
		header("location:javascript://history.go(-1)");
		die;
	}
?>