<!DOCTYPE HTML>
<html> 
<title>Write Review</title>
<body>
	<br>
	<h1 title="test">MetalEmpirePC Register</h1>
	<br>
	<form method = "post", action="/MetalEmpirePC/user_review.php">
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
			Review Content: <br><br>
			<textarea rows="6" cols="50" name = "review_text"></textarea>
			<br>
			<br>
			<?php
				session_start();
				if(isset($_SESSION["username"])) {
					echo "<input type=\"submit\" value=\"Post Review\">";
				} else {
					echo "<input type=\"submit\" value=\"Post Review\" disabled>";
				}

			?>
			
		</fieldset>
	</form>
</body>
</html>