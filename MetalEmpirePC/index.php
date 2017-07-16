<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="shortcut icon" href="favicon.ico" />
	<style>
	</style>
</head>
	<div style="position: relative; min-height: 100%; top: 0px;">
		<body>
		

		<!-- <img src="MainLogoCompact.png" alt="Main Logo" style="width:1298vw;height:184.5vw;"> -->
		<img src="MainLogoCompact.png" alt="Main Logo" style="width:75%;height:100%;" align = "middle">

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
		<img src="MainBanner.png" alt="Main Banner" style="width:100%;height:100%;">
		
		<table style="width:100%", table align = "center">
			<tr>
				<th><h2>Core Series</th>
				<th><h2>Magma Series</h2></th>
				<th><h2>Titanium Series</h2></th>
			</tr>
			<tr>
				<th><p>Starting from $799</p></th>
				<th><p>Starting from $1299</p></th>
				<th><p>Starting from $2499</p></th>
			</tr>
			<tr>
				<th><a href="coreSeries.php"> <img src="MoreDetailsButton.png" alt="MoreDetails" style="width:60%;height:60%;"></a></th>
				<th><a href="magmaSeries.php"> <img src="MoreDetailsButton.png" alt="MoreDetails" style="width:60%;height:60%;"></a></th>
				<th><a href="titaniumSeries.php"> <img src="MoreDetailsButton.png" alt="MoreDetails" style="width:60%;height:60%;"></a></th>
				
			</tr>
		
		
		
		<p><table style="width:75%", table align = "center">
			<tr>
				<th>Processor</th>
				<th>Graphics Card</th>
				<th>RAM</th>
				<th>Case</th>
				<th>Cooler</th>
				<th>Motherboard</th>
				<th>Storage 1</th>
				<th>Storage 2</th>
				<th>Power Supply</th>
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
				
				for($i = 0; $i < mysql_result(mysql_query("SELECT COUNT(*) FROM productdetails"),0); $i ++) {
					echo "<tr><p>";
					for( $p = 0; $p < count($productDetails); $p++) {
						echo "<th><p>";
						echo mysql_result(mysql_query("SELECT " . $productDetails[$p] . " FROM productdetails"), $i);
						echo "</th></p>";
					}
					echo "</tr></p>";
				}
			
			?>
		</table>
	</p>
	
	</div>
	
	<br>
	<hr>
	<br>
	
	<div class = "featureLeft">
		<hl><img src = "MemoryUpgrade.png", style = "float: right">Features</hl>
		
	</div>
	
	</body>

</html> 
