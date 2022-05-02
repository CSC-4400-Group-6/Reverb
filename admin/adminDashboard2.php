<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Title of the tab on your web browser-->
		<title>Reverb Admin Panel Dashboard</title>
		<meta charset=utf-8>
		<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
	</head>
	<body>
	
		
		<!-- Init the header -->
		<?php include("../shared/header.php"); ?>
		<!-- Highlight the page we are currently on -->
		<script type="module">
			document.getElementById('5').className += 'is-active';
		</script>

		<!-- Mockup Admin Page -->
		<div class="container">
			<div class="columns">
			
				<!-- Sidebar -->
				<?php include("../admin/adminDashboardSidePanel.php"); ?>
				<!-- Highlight the page we are currently on -->
				<script type="module">
					document.getElementById('Dashboard').className += 'is-active';
				</script>
				
				<!-- Content Section -->
				<div class="column is-9">
				
					<!-- Page Title -->
					<section class="hero is-info welcome is-small">
						<div class="hero-body" style="background: linear-gradient(to right, #5B86E5, #36D1DC);">
							<div class="container">
								<h1 class="title">
									Hello <?php echo $_SESSION['username'] ?? null; ?>
								</h1>
								<h2 class="subtitle">
									Good to see you today!
								</h2>
							</div>
						</div>
					</section>
					
					<!-- Cool looking statistics -->
					<section class="info-tiles">
						<div class="tile is-ancestor has-text-centered">
							<div class="tile is-parent">
								<article class="tile is-child box">
									<p class="title"> <?php $conn = new mysqli("localhost", "root", "", "reverb"); $result=mysqli_query($conn,"SELECT * FROM `user`;"); echo $result->num_rows; ?></p>
									<p class="subtitle">Registered Users</p>
								</article>
							</div>
							<div class="tile is-parent">
								<article class="tile is-child box">
									<p class="title"> <?php $conn = new mysqli("localhost", "root", "", "reverb"); $result=mysqli_query($conn,"SELECT * FROM `audio`;"); echo $result->num_rows; ?></p>
									<p class="subtitle">Audio Files</p>
								</article>
							</div>
							<div class="tile is-parent">
								<article class="tile is-child box">
									<p class="title"> <?php $conn = new mysqli("localhost", "root", "", "reverb"); $result=mysqli_query($conn,"SELECT * FROM `announcement`;"); echo $result->num_rows; ?></p>
									<p class="subtitle">Announcements</p>
								</article>
							</div>
						</div>
					</section>
					
				</div> <!-- CONTENT END -->
				
			</div>
		</div> <!-- CONTAINER END -->
		
	</body>
</html>