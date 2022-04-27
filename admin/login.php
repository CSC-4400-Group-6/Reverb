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
	
		<!-- Init the header -->
		<?php include("../shared/header.php"); ?>
		<!-- Highlight the page we are currently on -->
		<script type="module">
			document.getElementById('4').className += 'is-active';
		</script>
		
		<?php
			if($_SESSION['username'] ?? null)
			{
				include("../user/profilepage.php");
			}
			else {
				include("../admin/login2.php");
			}
		?>
		
	</body>
</html>