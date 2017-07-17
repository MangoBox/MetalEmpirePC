<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="shortcut icon" href="favicon.ico" />
</head>

<body>
	<a href = "index.php"><img src="MainLogoCompact.png" alt="Main Logo" style="width:60%;height:60%;" align = "middle"></a>

	<div class = "reviewSection">
		<h2 style = "text-align: center; font-size: 60px">All Reviews</h2>
		<?php
			include("create_user_review.php");
			//Creates the user review script. 0 and 9 for all product parameters.
			createUserReview(0, 9);
		?>
	</div>
</body>
</html> 