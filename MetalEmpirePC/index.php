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
		

		<script src="testJavascript.js"></script>
		<!-- <img src="MainLogoCompact.png" alt="Main Logo" style="width:1298vw;height:184.5vw;"> -->
		<img src="MainLogoCompact.png" alt="Main Logo" style="width:75%;height:100%;" align = "middle">
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
		
		
		
		<p><table style="width:75%", table align = "center", border="1px">
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
	</body>

</html> 
