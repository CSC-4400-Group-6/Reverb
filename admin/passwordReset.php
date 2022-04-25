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
		
		<div class="container has-text-centered">
			<div class="column is-4 is-offset-4">
				<h3 class="title has-text-black">Password Reset</h3>
				<hr class="login-hr">
				<p class="subtitle has-text-black">Please enter new password</p>
				<div class="box">
					<form action = "../admin/login.php" method = "post">
					
						<div class="field">
							<div class="control">
								<input class="input is-large" type="password" name="pword", placeholder="New Password" autofocus="" required>
							</div>
						</div>
						
						<div class="field">
							<div class="control">
								<input class="input is-large" type="password" name="confirmpword", placeholder="Confirm New Password" autofocus="" required>
							</div>
						</div>
						
						<button class="button is-block is-info is-large is-fullwidth">Submit</button>
						
					</form>
				</div>
				
				<br><br><br><br>
				
			</div>
		</div> <!-- CONTAINER END -->
		
		

	</body>
</html>