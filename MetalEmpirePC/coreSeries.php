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
				
			
				
				for($i = 0; $i < count($productDetails); $i ++) {
					echo "<tr><p>";
					for( $p = 0; $p < mysql_result(mysql_query("SELECT COUNT(*) FROM productdetails"),0); $p++) {
						echo "<th><p>";
						echo $productName[$p];
						echo mysql_result(mysql_query("SELECT " . $productDetails[$p] . " FROM productdetails"), $i);
						echo "</th></p>";
					}
					echo "</tr></p>";
				}
			
			for($i = 0; $i < mysql_result(mysql_query("SELECT COUNT(*) FROM productdetails"),0); $i ++) {
				
				
			}
			
			
			
			?>
			
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				
				mysql_connect("localhost","root","") or die ("not connected");
				
				mysql_select_db("metalempirepc") or die ("no db found");
			
		</table>
	</p>
	</body>

</html> 
