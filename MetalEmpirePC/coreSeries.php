
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="shortcut icon" href="favicon.ico" />
	<style>
	</style>
	<title>Core Series</title>
</head>
<div style="position: relative; min-height: 100%; top: 0px;">
	<body>
		

		<script src="testJavascript.js"></script>
		<!-- <img src="MainLogoCompact.png" alt="Main Logo" style="width:1298vw;height:184.5vw;"> -->
		<a href = "index.php"><img src="MainLogoCompact.png" alt="Main Logo" style="width:75%;height:100%;" align = "middle"></a>
		<hr>
		<table style = "width: 100%", table align = "center">
			<tr>
				<th>
					<h2>Reviews</h2>
				</th>
				<th>
					<h2>Forums</h2>
				</th>
				<th>
					<h2>About us</h2>
				</th>
				<th>
					<h2><a href = "loginPage.php">Log In</a></h2>
				</th>
				<th>
					<h2><a href = "registerPage.php">Register</a></h2>
				</th>

			</tr>
		</table>
		<hr>
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

		<img src="CoreSeriesBanner.png" alt="Core Series" style="width:100%;height:100%;">
		<div class = "center">
			<p style = "font-size: 40px;"><b>Great things come in small packages.</b></p>
			<p style = "font-size: 35px;">Get work done quickly and efficiently with 7th Generation Intel Processors<br> and ultrafast SanDisk SSDs.</p>
		</div>
		<hr>
		<p><table style="width:75%", table align = "center">
			
			<tr><th><hl>Core A1</hl></th>
				<th><hl>Core A2</hl></th>
				<th><hl>Core A3</hl></th>

			</tr>

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
				
				echo "<tr>";
				for($t = 0; $t < 3; $t++) {
					echo "<th><p style = \"font-size: 35px;\">$" . mysql_result(mysql_query("SELECT productPrice FROM producttable"), $t) . "</p></th>"; 
				}
				echo "</tr><tr>";
				for($g = 0; $g < 3; $g++) {
					echo "<th><a href=\"order_pc_placeholder.html\"> <img src=\"PurchaseButton.png\" alt=\"Purchase\" style=\"width:60%;height:50%;\"></a></th>";
				}
				echo "</tr>";

				for($i = 0; $i < mysql_result(mysql_query("SELECT COUNT(*) FROM productdetails"),0); $i++) {
					echo "<tr><p>";
					for( $p = 0; $p < 3; $p++) {
						echo "<th><p2>";
						echo $productName[$i] . "</b><br>";
						echo "</p2><p>";
						echo mysql_result(mysql_query("SELECT " . $productDetails[$i] . " FROM productdetails"), $p);
						echo "</th></p>";
					}
					echo "</tr></p>";
				}

				for($i = 0; $i < mysql_result(mysql_query("SELECT COUNT(*) FROM productdetails"),0); $i ++) {


				}



				?>
			</table>
		</p>
		<hr>
		<div class = "featureLeft">
			<hl><img src = "CoreSize.png", style = "float: right; padding: 40px"><br><br>Smallest case in the World<br></hl>
			<p>The Core series features the smallest case on the planet: the In Win Chopin. At 3.3 litres in size, it is the ultimate space saver. But that doesn't mean its not capable. We managed to fit a full-size Mini-ITX motherboard, full-height Intel heatsink and a SSD in the Core series!</p>
			<p>2x USB 3.0 ports and audio jacks on the front panel allows for plentiful I/O in apartments, receptions and presentations. Don't let the size fool you.</p>
		</div>
		<hr>
		<div class = "featureRight">
			<hl><img src = "7thGen.png", style = "float: left; padding: 40px"><br><br>Full power processors<br></hl>
			<p>Almost every all-in-one, convertible or small form-factor computer you come across is confined to low-power processors in order to decrease noise, heat and power consumption.</p>
			<p>Here at MetalEmpirePC, we don't comprimise. We provide full-power 7th Generation Intel Processors to give you the opportunity to do more. Much more.</p>
		</div>
		<hr>
		<div class = "featureLeft">
			<hl><img src = "QuietFan.png", style = "float: right; padding: 40px"><br><br>Whisper quiet<br></hl>
			<p>Nobody likes loud PCs. The whirring of a computer can potentially be one of the most distracting noises ever.</p>
			<p>So instead of hiding your PC away, try the Core series! It features a single high-airflow heatsink fan, which remains dead-quiet until heavy workloads are applied.</p>
		</div>
		<hr>

		<div class = "reviewSection">
			<h2 class = "title">Reviews</h2>
			<p class = "reviewTitle_subtitle"><a href = "reviewPage.php"><b>Write a review!</b></a></p>
			<!-- Reviews-->
			<?php
			include("create_user_review.php");
			//Creates the user review script. 0 and 3 for product parameter.
			createUserReview(0, 2);

			?>
		</div>
	</body>
	</html> 
