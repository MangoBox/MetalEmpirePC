<!DOCTYPE HTML>
<html> 
<title>Write Review</title>
<body>
	<br>
	
	<br>
	<form method = "post", action="/MetalEmpirePC/user_review.php">
	<div style="width: 30%; margin: 0 auto;">
		<h1 title="test">Write a Review</h1>
			<fieldset>
				<legend>Write Review</legend>

				Review Title: <input type="text" name="title" color="gray">
				<br>
				<br>
				Rating:
				<br>
				<input type="radio" name="rating" value="rating1"> ★☆☆☆☆<br>
				<input type="radio" name="rating" value="rating2"> ★★☆☆☆<br>
				<input type="radio" name="rating" value="rating3"> ★★★☆☆<br>
				<input type="radio" name="rating" value="rating4"> ★★★★☆<br>
				<input type="radio" name="rating" value="rating5"> ★★★★★<br>

				<br>
				<select name = "product_select">
					<option selected="selected">Select a Product</option>
					<option>Core A1</option>
					<option>Core A2</option>
					<option>Core A3</option>
					<option>Magma B1</option>
					<option>Magma B2</option>
					<option>Magma B3</option>
					<option>Titanium X1</option>
					<option>Titanium X2</option>
					<option>Titanium X3</option>
				</select>

				<br>
				<br>
				<div style="width: 100%; margin: 0 auto;">
					Review Content: <br><br>
					<textarea rows="6" cols="50" name = "review_text"></textarea>
				</div>
				<br>
				<br>
				<?php
				session_start();
				if(isset($_SESSION["username"])) {
					echo "<input type=\"submit\" value=\"Post Review\">";
				} else {
					echo "<input type=\"submit\" value=\"Post Review\" disabled><br>";
					echo "You must be logged in to post reviews!<br>";
					echo "<a href = \"loginPage.php\">Log In</a>";
				}

				?>

			</fieldset>
		</form>
	</div>
</body>
</html>