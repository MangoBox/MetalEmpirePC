<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	
	mysql_connect("localhost","root","") or die ("Not connected to database!");
	
	mysql_select_db("metalempirepc") or die ("No database found!");

	//I created a custom review script to move review processing away from product pages.
	function createUserReview($min_product_name, $max_product_name) {
		//Product Type is a integer supposedly between 1 and 3 that denotes what product series this is in.
	
		//Refactored $i into a variable that loops through all user indexes. May cause problems with null referential indexes.
		//mysql_result(mysql_query("SELECT userID FROM user_reviews order by userID asc limit 1"),0);
		for($i = 0; $i < mysql_result(mysql_query("SELECT COUNT(*) FROM user_reviews"),0); $i++) { 

			//Long as hell, but basically iterates through the user reviews to find reviews on the relevant product (s).
			if(mysql_result(mysql_query("SELECT productID FROM user_reviews"), $i) >= $min_product_name && 
				mysql_result(mysql_query("SELECT productID FROM user_reviews"), $i) <= $max_product_name) {

				//Gets the username of the published review. Probably more effcient ways of doing this.
				$username = mysql_result(mysql_query("SELECT username FROM users"),mysql_result(mysql_query("SELECT userID FROM user_reviews"),$i) - 1);
				
				//Rating generation.
				$rating = "<p class = 'yellow_star'>";
				for($k = 1; $k <= 5; $k++) {
					//If the rating does not match
					if(mysql_result(mysql_query("SELECT rating FROM user_reviews"),$i) < $k) {
						$rating .= "☆";
					} else {
						$rating .= "★";
					}
				}
				$rating .= "</p>";
				$product_name = "(" . mysql_result(mysql_query("SELECT productName FROM producttable"),mysql_result(mysql_query("SELECT productID FROM user_reviews"), $i)) . ")</p>";

				echo "<br><hr>";
				echo "<p class = \"review_title\"><b>" . mysql_result(mysql_query("SELECT reviewTitle FROM user_reviews"),$i) . "</p></b><br>";
				echo "<p class = \"review_subtitle\">Published by " . $username . " on " . mysql_result(mysql_query("SELECT date FROM user_reviews"),$i) . " " .$product_name;
				echo $rating;
				echo "<br><p class = \"review_text\">" . mysql_result(mysql_query("SELECT reviewText FROM user_reviews"),$i) . "</p><br>";
				
				//Checking if the session has actually started yet!
				if (session_status() == PHP_SESSION_NONE) {
					session_start();
				}

				if(isset($_SESSION["username"])) {
					//Checks if the current user iterator matches the session username.
					if($_SESSION["username"] === $username) {
						echo "<p><a href = \"reviewPage.php\">Edit Your Review </a></p>";
						echo "<p><a href = \"delete_review.php\">Delete Review</a></p>";
					}
				}
			}
		}
	}
?>