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
				<p class="subtitle has-text-black">Please enter username and answer the security question.</p>
				<div class="box">
					<form action = "../logic/processPassword.php" method = "post">
					
						<div class="field">
							<div class="control">
								<input class="input is-large" name="uname", placeholder="Username" autofocus="" required>
							</div>
						</div>
						
						<hr class="login-hr">
						<p class="subtitle has-text-black">Security Question:
							<div class="field">
								<div class="control">
									<div class="select">
									<select>
										<option id="secQ1" name="secQ1">Question 1</option>
										<option id="secQ1" name="secQ2">Question 2</option>
										<option id="secQ1" name="secQ3">Question 3</option>
									</select>
									</div>
								</div>
							</div>
						</p>
						
						
						<div class="field">
							<div class="control">
								<input class="input is-large" name="secAns", placeholder="Security Question" autofocus="" required>
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