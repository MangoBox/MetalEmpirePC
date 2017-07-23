<!DOCTYPE HTML>
<html> 

<head>
	<link rel="stylesheet" href="style1.css">
	<title>Write Review</title>
</head>
<body>
	<br>
	<a href = "index.php"><img src="MainLogoCompact.png" alt="Main Logo" style="width:75%;height:100%;" align = "middle"></a>
	<hr>
	<div>
		<ul>
			<li><a href="index.php"><h2>Home</h2></a></li>
		
			<li class="dropdown">
				<a class="dropbtn"><h2>PC Series</h2></a>
				<div class="dropdown-content">
					<a href="coreSeries.php"><h2 style = "color: #00b2db;">Core</h2></a>
					<a href="magmaSeries.php"><h2 style = "color: #ffbb00;">Magma</h2></a>
					<a href="titaniumSeries.php"><h2 style = "color: #db00b6;">Titanium</h2></a>
				</div>
			</li>
			<li><a href="all_reviews.php"><h2>All Reviews</h2></a></li>
			<li><a href="loginPage.php"><h2>Log In</h2></a></li>
			<li><a href="registerPage.php"><h2>Register</h2></a></li>
		</ul>
	</div>
	<hr>
	<form method = "post", action="/MetalEmpirePC/user_review.php">
	<div style="width: 80%; margin: 0 auto;" align = "middle">
		<p class = 'p'>
			<?php 
				//This script checks whether the users is logged in.
			if (session_status() == PHP_SESSION_NONE) { //if there's no session_start yet...
    			session_start(); //do this
			}
			if(isset($_SESSION["username"])) {
					//If the user is logged in.
				echo "You are logged in! Welcome, <b>" . $_SESSION["username"] . "</b>!";
				echo " <a href = logout.php>Logout</a>";
			} else {
				echo "You are not logged in. <a href = \"loginPage.php\">Log in<a> or <a href = \"registerPage.php\">register.<a>";
			}
			?>			
		</p>
	</div>
	</div>
	<div style="width: 30%; margin: 0 auto;">
		<h1 title="test">Write a Review</h1>
			<fieldset>
				<legend>Write Review</legend>

				Review Title: <input type="text" name="title" color="gray">
				<br>
				<br>
				Rating:
				<br>
				<input type="radio" name="rating" value="rating1" selected> ★☆☆☆☆<br>
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
					<p>Review Content:</p>
					<textarea rows="6" cols="50" name = "review_text"></textarea>
				</div>
				<br>
				<br>
				<?php
				if (session_status() == PHP_SESSION_NONE) { //if there's no session_start yet...
    				session_start(); //do this
				}

				if(isset($_SESSION["username"])) {
					echo " Logged in as " . $_SESSION["username"];
					echo "<br><input type=\"submit\" value=\"Post Review\">";
				} else {
					echo "You must be logged in to post reviews!<br>";
					echo "<a href = \"loginPage.php\">Log In</a><br><br>";
					echo "<input type=\"submit\" value=\"Post Review\" disabled><br>";
				}

				?>

			</fieldset>
		</form>
	</div>
</body>
</html>