<!-- Profile Page -->
<!-- As of rn just to let the user log out of the their profile / PHP_Session -->
<!-- To be expanded? -->

<div class="container has-text-centered">
	<div class="column is-4 is-offset-4">
	
		<h1 class="title has-text-centered"> Hello <?php echo $_SESSION['username'] ?? null; ?> </h1>
		<!-- This is kinda hacky, this logout action works because since a null form is passed
			 to processLogin.php, it is interpreted as an invalid login attempt.
			 Invalid login logic is to erase your session data and kick you back to login page -->
		<form action = "../logic/processLogin.php" method = "post" >
			<button class="button is-block is-info is-large is-fullwidth">Log Out </button>
		</form>

	</div>
</div> <!-- CONTAINER END -->