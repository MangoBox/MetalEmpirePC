<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="shortcut icon" href="favicon.ico" />
	<style>
	</style>
	<title>Magma Series</title>
</head>
	<div style="position: relative; min-height: 100%; top: 0px;">
		<body>
		

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
		<!-- I'm aware this div attribute is depecrated. Can't be bothered integrating it into CSS (You can fix this daniel if you like :D) -->
		<div class = 'titleLogin'>
			<p class = 'p'>
				<?php 
					//This script checks whether the users is logged in.
					session_start();
					if(isset($_SESSION["username"])) {
						//If the user is logged in.
						echo "You are logged in! Welcome, <b>" . $_SESSION["username"] . "</b>!";
						echo " <a href = logout.php>Logout</a>";
					} else {
						echo "You are not logged in. Log in or register above.";
					}
				?>			
			</p>
		</div>

		<img src="MagmaSeriesBanner.png" alt="Main Banner" style="width:100%;height:100%;">
		
		<div class = "center">
			<p style = "font-size: 40px;"><b>Imagination sold seperately.</b></p>
			<p style = "font-size: 35px;">Unleash your creativity with the Magma Series.<br> Featuring powerful Hybrid Storage, Nvidia graphics cards and unbelievable multitasking capabilities.</p>
		</div>
		<hr>
		<p><table style="width:75%", table align = "center">
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				
				mysql_connect("localhost","root","") or die ("not connected");
				
				mysql_select_db("metalempirepc") or die ("no db found");
				$productDetails[0] = "cpu";
				$productDetails[1] = "gpu";
				$productDetails[2] = "ram";
				$productDetails[3] = "pcCase";
				$productDetails[4] = "cooler";
				$productDetails[5] = "mobo";
				$productDetails[6] = "storage1";
				$productDetails[7] = "storage2";
				$productDetails[8] = "psu";
			
				$productName[0] = "Processor";
				$productName[1] = "Graphics Card";
				$productName[2] = "Memory";
				$productName[3] = "Case";
				$productName[4] = "Cooler";
				$productName[5] = "Motherboard";
				$productName[6] = "Drive 1";
				$productName[7] = "Drive 2";
				$productName[8] = "Power Supply";
				
				echo "<tr><th><hl>Magma B1</hl></th>";
				echo "<th><hl>Magma B2</hl></th>";
				echo "<th><hl>Magma B3</hl></th></tr>";

				echo "<tr>";
				for($t = 3; $t <= 5; $t++) {
					echo "<th><p style = \"font-size: 35px;\">$" . mysql_result(mysql_query("SELECT productPrice FROM producttable"), $t) . "</p></th>"; 
				}
				echo "</tr><tr>";
				for($g = 0; $g < 3; $g++) {
					echo "<th><a href=\"order_pc_placeholder.html\"> <img src=\"PurchaseButton.png\" alt=\"Purchase\" style=\"width:60%;height:50%;\"></a></th>";
				}
				echo "</tr>";

				
				for($i = 0; $i < mysql_result(mysql_query("SELECT COUNT(*) FROM productdetails"),0); $i++) {
					echo "<tr><p>";
					for( $p = 3; $p < 6; $p++) {
						echo "<th><p2>";
						echo $productName[$i] . "</b><br>";
						echo "</p2><p>";
						echo mysql_result(mysql_query("SELECT " . $productDetails[$i] . " FROM productdetails"), $p);
						echo "</th></p>";
					}
					echo "</tr></p>";
				}
			
			
			
			?>
		</table>
	</p>

	<br>
	<br>
	<hr>
	<br>
	<br>
	<div style = "text-align: center;">
			<hl style = " font-size: 75px">Features</hl>
	</div>
	<br>
	<br>

	<div class = "featureLeft">
			<hl><img src = "MEPC-NvidiaLogo.png", style = "float: right; padding: 40px"><br><br>Nvidia Graphics<br></hl>
			<p>The 10-series of Graphics from Nvidia feature the latest-generation features, everything from powersaving fan control to awesome graphics performance using the latest Pascal architecture.</p>
			<p>Whether you buy the Magma B1 with the well-known GT 1030 for budget gaming or a powerful Magma B3 with the legendary value GTX 1050Ti, we've got you covered!</p>
		</div>
	<hr>

	<div class = "featureRight">
			<hl><img src = "HybridFeature.png", style = "float: left; padding: 40px"><br><br>Hybrid storage<br></hl>
			<p>SSDs are the latest craze of blazingly fast power, but sometimes the comprimise of less storage is simply not worth it.</p>
			<p>So, we give you the best of both worlds with the Magma series of PCs, giving you the ultra-fast SSD storage plus the mass storage of hard drives for videos, games and everything else you can think of.</p>
		</div>
	<hr>
	<div class = "featureLeft">
			<hl><img src = "SizeMagmaComparison.png", style = "float: right; padding: 40px"><br><br>Compact Size<br></hl>
			<p>In cramped apartment space, tiny rooms or just claustrophobic areas in general, a large PC is simply inconvenient.</p>
			<p>We cram everything into the awesome Corsair 88R, packing boatloads of power in a small package while still keeping cool even under the heaviest of loads!</p>
		</div>
	<hr>

		<div class = "reviewSection">
			<h2 class = "title">Reviews</h2>
			<p class = "reviewTitle_subtitle"><a href = "reviewPage.php"><b>Write a review!</b></a></p>
			<!-- Reviews-->
			<?php
			include("create_user_review.php");
			//Creates the user review script. 4 and 6 for product parameter.
			createUserReview(3, 5);

			?>
		</div>

	</body>

</html> 