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
 	</body>
 </html>