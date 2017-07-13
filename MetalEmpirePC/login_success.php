<?php
	//This script is intended for a sucessful login.
	session_start();
	if(!isset($_SESSION["username"])) {
		//Consider revising where this links.
		header("location: /MetalEmpirePC/loginPage.php");
	}
 ?>


 <html>
 	<body>
 		Login Successful!
 		<a href = "loginPage.php"> Back to Login page </a>
 	</body>
 </html>