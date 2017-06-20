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

		<button type="button" onclick="closeBox()">lmao u guid</button>
	</p>
	</body>

</html> 