<?php
	//I created a custom review script to move review processing away from product pages.
	function createUserReview($min_product_name, $max_product_name) {
		//Product Type is a integer supposedly between 1 and 3 that denotes what product series this is in.
		$servername = "localhost";
		$username = "root";
		$password = "";
		
		mysql_connect("localhost","root","") or die ("Not connected to database!");
		
		mysql_select_db("metalempirepc") or die ("No database found!");

		for($i = 0; $i < mysql_result(mysql_query("SELECT COUNT(*) FROM user_reviews"),0); $i++) { 

			//Long as hell, but basically iterates through the user reviews to find reviews on the relevant product (s).
			if(mysql_result(mysql_query("SELECT productID FROM user_reviews"), $i) >= $min_product_name && 
				mysql_result(mysql_query("SELECT productID FROM user_reviews"), $i) <= $max_product_name) {

				//Gets the username of the published review. Probably more effcient ways of doing this.
				$username = mysql_result(mysql_query("SELECT username FROM users"),mysql_result(mysql_query("SELECT userID FROM user_reviews"),$i));
				
				//Rating generation.
				$rating = "<p class = 'yellow_star'>";
				for($k = 1; $k <= 5; $k++) {
					//If the rating does not match
					if(mysql_result(mysql_query("SELECT rating FROM user_reviews"),$i) <= $k) {
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
				
			}
		}
	}
?>