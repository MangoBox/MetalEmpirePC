<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="shortcut icon" href="favicon.ico" />
	<style>
	</style>
	<title>MetalEmpirePC Home</title>
</head>
<!-- <div style="position: relative; min-height: 100%; top: 0px;"> -->
<body>
	<!-- <img src="MainLogoCompact.png" alt="Main Logo" style="width:1298vw;height:184.5vw;"> -->
	<a href = "index.php"><img src="MainLogoCompact.png" alt="Main Logo" style="width:75%;height:100%;" align = "middle"></a>

	<hr>
	<div>
		<ul>
			<li><a href="test"><h2>Home</h2></a></li>
		
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
	<div class = 'titleLogin'>
		<p class = 'p' style = "margin-right: 10px;">
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

	<div style = "width:100%; float:top;">
		<table style="width:100%;">
			<tr>
				<th><h2>Core Series</h2></th>
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
			</table>
			<br>
		<br>
		<hr>
		<br>
		<div style = "text-align: center;">
			<hl style = " font-size: 75px">Features</hl>
		</div>
		<br>
		<br>

		<div class = "featureLeft">
			<hl><img src = "MemoryUpgrade.png", style = "float: right; padding: 40px"><br><br>Minimum 8gb Ram<br></hl>
			<p>Multitasking and productivity is the future of computing. That means that anything below 8GB of RAM won't cut it.</p>
			<p>We use lightning-fast DDR4 RAM to ensure unbeatable performance. Whether you're a film-maker, game designer or just browsing emails, 8GB of RAM ensures the best balance between price and performance.
		</div>
		<hr>
		<div class = "featureRight">
			<hl><img src = "SSDFeature.png", style = "float: left; padding: 40px"><br><br>Next-Gen Storage<br></hl>
			<p>Lets face it: Hard drives are a pain. Loud, fragile and slow, they've been around for over 20 years. Its time to move on.</p>
			<p>Solid State Drives, or SSDs for short, are the next generation of storage. They can obtain up to 10x the performance of standard Hard Drives! Not only will programs open in an instant, but a sub-15 second boottime will happen, every time!
		</div>
		<hr>
		<div class = "featureLeft">
			<hl><img src = "DriversInstalled.png", style = "float: right; padding: 40px"><br><br>Ready To Rock<br></hl>
			<p>Nobody wants to spend hours installing operating systems and drivers when you just get your shiny new PC!</p>
			<p>So, we do it for you! Every system has all drivers and tools installed, as well as a 24-hour AIDA64 stress test.
			This ensures you get the smoothest experience with your new MetalEmpirePC!
			<br>
		</div>
		<hr>
		<div class = "featureRight">
			<hl><img src = "WindowsLogo.png", style = "float: left; padding: 40px"><br><br>Windows 10<br></hl>
			<p>The latest and greatest operating system from Microsoft is the weapon of choice for MetalEmpirePC.</p>
			<p>Everything you're familiar with, and more! From everyday tasks such as web browsing, to animation and video workloads, Windows 10 is optimised for just about everything.
			<br>
		</div>
		<hr>
		<div class = "featureLeft">
			<hl><img src = "CoreSeries3.png", style = "float: right; padding: 40px"><br><br>7th Generation Processors<br></hl>
			<p>The latest 7th generation processors from Intel feature extremely powerful heavy-duty capabilities.</p>
			<p>Every MetalEmpirePC we offer has 4 CPU threads and up, allowing gaming, producivity and just about anything you can think of.
			<br>
		</div>
			</body>
			</html> 
