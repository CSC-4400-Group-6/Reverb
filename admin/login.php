<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Title of the tab on your web browser-->
		<title>Reverb Log In</title>
		<meta charset=utf-8>
		<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
	</head>
	<body>
	
		<?php include("../shared/header.php"); ?>
		
		<?php
			if($_SESSION['username'] ?? null)
			{
				echo '<h1 class="title has-text-centered"> Hello ' . $_SESSION['username'] . '</h1>';
				echo '<form action = "../logic/processLogin.php" method = "post" >
						<button class="button is-block is-info is-large is-fullwidth">Log Out </button>
					</form>';
			}
			else {
				include("../admin/login2.php");
			}
		?>
		
		

	</body>
</html>