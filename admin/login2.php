<!--Mockup Login Page -->
<div class="container has-text-centered">
	<div class="column is-4 is-offset-4">
		<h3 class="title has-text-black">Login</h3>
		<hr class="login-hr">
		<p class="subtitle has-text-black">Please login to proceed.</p>
		<div class="box">
			<form action = "../logic/processLogin.php" method = "post" >
			
				<div class="field">
					<div class="control">
						<input class="input is-large" name="uname", placeholder="Username" autofocus="">
					</div>
				</div>

				<div class="field">
					<div class="control">
						<input class="input is-large" type="password" name="pword", placeholder="Password">
					</div>
				</div>
				
				<div class="field">
					<label class="checkbox">
						<input type="checkbox">
						Remember me
					</label>
				</div>
				
				<button class="button is-block is-info is-large is-fullwidth">Login </button>
				
			</form>
		</div>
		
		<!-- Footer Stuff -->
		<p class="has-text-grey">
			<a href="../">Sign Up</a> &nbsp;·&nbsp;
			<a href="../">Forgot Password</a> &nbsp;·&nbsp;
			<a href="../">Need Help?</a>
		</p>
		
		<!-- Add some empty space at the bottom -->
		<br><br><br><br>
		
	</div>
</div> <!-- CONTAINER END -->