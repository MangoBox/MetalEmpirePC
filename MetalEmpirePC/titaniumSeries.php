<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="shortcut icon" href="favicon.ico" />
	<style>
	</style>
	<title>Titanium Series</title>
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
		<img src="TitaniumBanner.png" alt="Main Banner" style="width:100%;height:100%;">
		<br>
		
		<div class = "center">
			<p style = "font-size: 40px;"><b>Redefines power by smashing the competition.</b></p>
			<p style = "font-size: 35px;">When pure power is unchained, the Titanium series is the result.<br> Featuring overclockable 7th generation CPUs, <br> powerful water cooling and a gorgeous tempered glass case,<br> the Titanium series knows no bounds.</p>
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
				
				echo "<tr><th><hl>Titanium X1</hl></th>";
				echo "<th><hl>Titanium X2</hl></th>";
				echo "<th><hl>Titanium X3</hl></th></tr>";

				echo "<tr>";
				for($t = 6; $t <= 8; $t++) {
					echo "<th><p style = \"font-size: 35px;\">$" . mysql_result(mysql_query("SELECT productPrice FROM producttable"), $t) . "</p></th>"; 
				}
				echo "</tr><tr>";
				for($g = 0; $g < 3; $g++) {
					echo "<th><a href=\"order_pc_placeholder.html\"> <img src=\"PurchaseButton.png\" alt=\"Purchase\" style=\"width:60%;height:50%;\"></a></th>";
				}
				echo "</tr>";

				
				for($i = 0; $i < mysql_result(mysql_query("SELECT COUNT(*) FROM productdetails"),0); $i++) {
					echo "<tr><p>";
					for( $p = 6; $p < 9; $p++) {
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
	<hr>
	<br>
	<div style="display:flex;justify-content:center;align-items:center;">
		<hl style font-size = "120px">Features</hl>
	</div>

	<div class = "featureLeft">
			<hl><img src = "WaterCooled.png", style = "float: right; padding: 40px"><br><br>Liquid Cooling<br></hl>
			<p>Air cooling is loud, clunky and most importantly: ineffecient. Corsairs famed H100i provides stunningly cool performance, with stock load temperatures averaging at just 45°C.</p>
			<p>Its not just powerful. Liquid cooling has proven to be of 75% quieter than stock Intel heatsinks. We guess you could say it's a pretty cool solution. </p>
		</div>
	<hr>
	<div class = "featureRight">
			<hl><img src = "OverclockTitanium.png", style = "float: left; padding: 40px"><br><br>Unlocked CPUs<br></hl>
			<p>The sky's the limit with powerful K-series unlocked Intel CPUs. With the H100i liquid cooler, have a blast overclocking your MetalEmpirePC!</p>
			<p>K-Series CPUs also feature improved core speed, higher memory frequencies and the expandable Z270 chipset. All at the heart of your Titanium-series PC.</p>
		</div>
	<hr>
	<div class = "featureLeft">
			<hl><img src = "EvolvAtxGlass.png", style = "float: right; padding: 40px"><br><br>Flawless Materials<br></hl>
			<p>Phanteks beautiful Evolv ATX case features pristine tempered glass side panels, thick aluminium and reinforced framework.</p>
			<p>Just because it looks awesome doesn't mean its not functional. It can fit up to a whooping 7 hard drives, full-size ATX motherboard and up to a 420mm graphics card. In other words? The case is a work of art in itself.</p>
		</div>
	<hr>

		<div class = "reviewSection">
			<h2 class = "title">Reviews</h2>
			<p class = "reviewTitle_subtitle"><a href = "reviewPage.php"><b>Write a review!</b></a></p>
			<!-- Reviews-->
			<?php
			include("create_user_review.php");
			//Creates the user review script. 7 and 9 for product parameter.
			createUserReview(6, 8);

			?>
		</div>

	</body>

</html> 