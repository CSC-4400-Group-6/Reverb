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
						<div class="hero-body">
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
									<p class="title">12k</p>
									<p class="subtitle">Audio Files</p>
								</article>
							</div>
							<div class="tile is-parent">
								<article class="tile is-child box">
									<p class="title">7k</p>
									<p class="subtitle">Open Tickets</p>
								</article>
							</div>
						</div>
					</section>
					
					<!-- PAGE SPLIT START -->
					<div class="columns">
					
						<!-- Event log stuff -->
						<div class="column is-6">
							<div class="card events-card">
							
								<!-- Headder -->
								<header class="card-header">
									<p class="card-header-title">
										Latest Tickets
									</p>
								</header>
								
								<!-- Entries -->
								<div class="card-table">
									<div class="content">
										<table class="table is-fullwidth is-striped">
											<tbody>
												<tr>
													<td width="5%"><i class="fa fa-bell-o"></i></td>
													<td>Lorum ipsum dolem aire</td>
													<td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
												</tr>
												<tr>
													<td width="5%"><i class="fa fa-bell-o"></i></td>
													<td>Lorum ipsum dolem aire</td>
													<td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
												</tr>
												<tr>
													<td width="5%"><i class="fa fa-bell-o"></i></td>
													<td>Lorum ipsum dolem aire</td>
													<td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
												</tr>
												<tr>
													<td width="5%"><i class="fa fa-bell-o"></i></td>
													<td>Lorum ipsum dolem aire</td>
													<td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
												</tr>
												<tr>
													<td width="5%"><i class="fa fa-bell-o"></i></td>
													<td>Lorum ipsum dolem aire</td>
													<td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
												</tr>
												<tr>
													<td width="5%"><i class="fa fa-bell-o"></i></td>
													<td>Lorum ipsum dolem aire</td>
													<td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
												</tr>
												<tr>
													<td width="5%"><i class="fa fa-bell-o"></i></td>
													<td>Lorum ipsum dolem aire</td>
													<td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
												</tr>
												<tr>
													<td width="5%"><i class="fa fa-bell-o"></i></td>
													<td>Lorum ipsum dolem aire</td>
													<td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
												</tr>
												<tr>
													<td width="5%"><i class="fa fa-bell-o"></i></td>
													<td>Lorum ipsum dolem aire</td>
													<td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
								<!-- Footer -->
								<footer class="card-footer">
									<a href="#" class="card-footer-item">View All</a>
								</footer>
								
							</div>
						</div>
						
						<!-- Database searchbars -->
						<div class="column is-6">
							<div class="card">
							
								<!-- Search bar header -->
								<header class="card-header">
									<p class="card-header-title">
										Search for Audio File
									</p>
									<a href="#" class="card-header-icon" aria-label="more options">
										<span class="icon">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</span>
									</a>
								</header>
								
								<!-- Search bar -->
								<div class="card-content">
									<div class="content">
										<div class="field has-addons">
											<div class="control is-expanded">
												<input class="input is-large" type="text" placeholder="">
											</div>
											<div class="control">
												<a class="button is-info is-large">
													Search
												</a>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Search bar header -->
								<header class="card-header">
									<p class="card-header-title">
										Search for Registered User
									</p>
									<a href="#" class="card-header-icon" aria-label="more options">
										<span class="icon">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</span>
									</a>
								</header>
								
								<!-- Search bar -->
								<div class="card-content">
									<div class="content">
										<div class="field has-addons">
											<div class="control is-expanded">
												<input class="input is-large" type="text" placeholder="">
											</div>
											<div class="control">
												<a class="button is-info is-large">
													Search
												</a>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div> <!-- PAGE SPLIT END -->
					
				</div> <!-- CONTENT END -->
				
			</div>
		</div> <!-- CONTAINER END -->
		
	</body>
</html>