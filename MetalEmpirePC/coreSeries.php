
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
		<a href = "index.php"><img src="MainLogoCompact.png" alt="Main Logo" style="width:75%;height:100%;" align = "middle"></a>
		<img src="CoreSeriesBanner.png" alt="Core Series" style="width:100%;height:100%;">
		
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
				
				echo "<tr><th><hl>Core A1</hl></th>";
				echo "<th><hl>Core A2</hl></th>";
				echo "<th><hl>Core A3</hl></th></tr>";
				
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

	<!-- Reviews -->
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		
		mysql_connect("localhost","root","") or die ("not connected");
		
		mysql_select_db("metalempirepc") or die ("no db found");

		for($i = 0; $i < mysql_result(mysql_query("SELECT COUNT(*) FROM user_reviews"),0); $i++) {
			//Long as hell, but basically iterates through the user reviews to find reviews on the relevant product.
			if(mysql_result(mysql_query("SELECT productID FROM user_reviews"), $i) >= 0 && mysql_result(mysql_query("SELECT productID FROM user_reviews"), $i) <= 2) {
				echo mysql_result(mysql_query("SELECT reviewText FROM user_reviews"),$i) . "<br>";
			}
		}
 	?>
	</body>
</html> 
