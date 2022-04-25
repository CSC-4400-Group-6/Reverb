<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Title of the tab on your web browser-->
		<title>Reverb Admin Panel User</title>
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

		<!-- Mockup Admin User Database Page -->
		<div class="container">
			<div class="columns">
			
				<!-- Sidebar -->
				<?php include("../admin/adminDashboardSidePanel.php"); ?>
				<!-- Highlight the page we are currently on -->
				<script type="module">
					document.getElementById('Users').className += 'is-active';
				</script>
            
				<!-- Content Section -->
				<div class="column is-9">
					<div class="card has-table">
					
						<!-- Page Title -->
						<section class="hero is-info welcome is-small">
							<div class="hero-body">
								<div class="container">
									<h1 class="title">
										User Management
									</h1>
								</div>
							</div>
						</section>
						
						<!-- User Search -->
						<form method="post">
							<div class="card-content">
								<div class="field has-addons">
									<div class="control is-expanded">
										<input class="input" type="text" name = "txtSearch">
									</div>
									<div class="control">
										<button class="button is-info" type="submit" name="btnSearch">
											Search
										</button>
									</div>
								</div>
							</div>
						</form>
						
						<!-- User Table -->
						<div class="card-content">
							<div class="b-table has-pagination">
								<div class="table-wrapper has-mobile-cards">
									<table class="table is-fullwidth is-striped is-hoverable is-fullwidth">
										<!-- Table Header -->
										<thead>											
											<tr>
												<th>Username</th>
												<th>Is Admin</th>
												<th></th>
											</tr>
										</thead>
										
										<!-- Table Body -->
										<tbody id = "userEntries">	
											<?php
												if(isset($_POST['btnSearch'])) {
													// Connect to the db
													$conn = new mysqli("localhost", "root", "", "reverb");
													// We want ALL our user tables
													$result=mysqli_query($conn,"SELECT * FROM `user` WHERE `Username` LIKE '%" . $_POST['txtSearch'] . "%';");
													while ($row = $result->fetch_assoc()) {  
														echo	'<tr">
																	<form action="../logic/toggleAdmin.php" method="post">
																		<td>
																			<input type="hidden" name="txtUser" value = "'. $row['Username'] . '"</input>' . $row['Username'] . '
																		</td>
																		<td>
																			<small class="has-text-grey is-abbr-like">' . $row['IsAdmin'] . '</small>
																		</td>
																		<td class="is-actions-cell">
																			<div class="buttons is-right">
																				<button class="button is-warning is-primary" type="submit">
																					Toggle Admin
																				</button>
																			</div>
																		</td>
																	</form>
																</tr>';
													}
												} else {
													// We just fresh loaded the page, bring up everybody
													// Connect to the db
													$conn = new mysqli("localhost", "root", "", "reverb");
													// We want ALL our user tables
													$result=mysqli_query($conn,"SELECT * FROM `user`;");
													while ($row = $result->fetch_assoc()) {  
														echo	'<tr">
																	<form action="../logic/toggleAdmin.php" method="post">
																		<td>
																			<input type="hidden" name="txtUser" value = "'. $row['Username'] . '"</input>' . $row['Username'] . '
																		</td>
																		<td>
																			<small class="has-text-grey is-abbr-like">' . $row['IsAdmin'] . '</small>
																		</td>
																		<td class="is-actions-cell">
																			<div class="buttons is-right">
																				<button class="button is-warning is-primary" type="submit">
																					Toggle Admin
																				</button>
																			</div>
																		</td>
																	</form>
																</tr>';
													}
												}
											?>
										
										</tbody>
									</table>
								</div>
								
							</div>
						</div> <!-- USER TABLE END -->	
						
					</div>						
				</div> <!-- CONTENT END -->
			
			</div>
		</div> <!-- PAGE CONTAINER END -->
		
	</body>
</html>