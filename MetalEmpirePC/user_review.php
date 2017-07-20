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

	//Review text & title variables.
	$review_title = $_POST["title"];
	$review_text = $_POST["review_text"];


	//Database connection information
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";

	$username = $_SESSION["username"];
	$password = $_SESSION["password"];

	//Connect to database and select relevant database.
	mysql_connect($host, $dbusername, $dbpassword) or die ("Database connection Failure.");
	mysql_select_db("MetalEmpirePC");	
	

	//Getting productID
	$product_select = $_POST["product_select"];
	$product_query = "SELECT productID FROM producttable WHERE productName = '$product_select'";
	$product_query_result = mysql_result(mysql_query($product_query),0);

	
	//Getting user ID
	$user_id = mysql_result(mysql_query("SELECT id FROM users WHERE username = '" . $_SESSION["username"] . "'"),0);
	
	//Getting date
	$date_custom = date("l jS F Y");
	
	//Getting rating
	//Uses global rating variable.
	$rating = 1;
	for($i = 1; $i <= 5; $i++) {
		$rating_string = "rating" . $i;
		if($_POST["rating"] === $rating_string) {
			global $rating;
			$rating = $i;
		}
	}

	$sql_remove_previous_query = "DELETE FROM user_reviews WHERE userID = " . $user_id;
	$sql_review_query = "INSERT INTO user_reviews (userID, productID, date, rating, reviewText, reviewTitle)
						VALUES ('$user_id', '$product_query_result', '$date_custom', '$rating', '$review_text', '$review_title')";

	mysql_query($sql_remove_previous_query);
	mysql_query($sql_review_query);

	//Redirects the user to the product page reviewed. Probably more effecient ways of doing this.
	$product_return_series = mysql_result(mysql_query("SELECT productSeries FROM producttable WHERE productID = " . $product_query_result),0);
	if($product_return_series === "A") {
		header("location:coreSeries.php");
	} else if ($product_return_series === "B") {
		header("location:magmaSeries.php");
	} else if ($product_return_series === "X") {
		header("location:titaniumSeries.php");
	}
 
	function echoReturnToLogon() {
		echo "<br><a href = \"registerPage.php\">Previous Page</a>";
		//Dodgy, but it works so whatever.
		//header("location:javascript://history.go(-1)");
		die;
	}
?>