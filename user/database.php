<?php session_start(); ?>

<HTML>
	<head>
		<!--Title of the tab on your web browser-->
		<title>Reverb Database</title>
		<meta charset=utf-8>
		<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
		<link rel="stylesheet"href="hometemp.css">
	</head>
	<body>
		
		<!-- Init the header -->
		<?php include("../shared/header.php"); ?>
		<!-- Highlight the page we are currently on -->
		<script type="module">
			document.getElementById('2').className += 'is-active';
		</script>
		
		<!--Container block that all content goes into. It's a big box.-->
		<div class="container">
			<div class="column is-8 is-offset-2">
			
				<!-- User Search -->
				<form method="post">
					<div class="field has-addons">
						<div class="control is-expanded">
							<input class="input" type="text" name ="txtSearch" placeholder="Song Name:">
						</div>
						<div class="control">
							<button class="button is-info" type="submit" name="btnSearch">
								Search
							</button>
						</div>
					</div>
				</form>
				<hr>	
				
				<!-- AUDIO ENTRIES -->
				<tbody id = "userEntries">	
					<?php
						if(isset($_POST['btnSearch'])) {
							// Connect to the db
							$conn = new mysqli("localhost", "root", "", "reverb");
							// We want ALL our user tables
							$result=mysqli_query($conn,"SELECT * FROM `audio` WHERE `Filename` LIKE '%" . $_POST['txtSearch'] . "%';");
							while ($row = $result->fetch_assoc()) {
								echo '
								<article class="media">
									<figure class="media-left">
										<p class="image is-128x128">
										<img src="https://bulma.io/images/placeholders/128x128.png">
										</p>
									</figure>
									<div class="media-content">
										<div class="content">
										<p>
											<strong>' . $row['Filename'] . '</strong> 
											<span class="tag is-rounded is-info"> @' . $row['Artist'] . '</span>
											<span class="tag is-rounded">' . $row['Album'] . '</span>
											<br>
										</p>
										<audio controls autoplay muted>
											<source src="test.mp3" type="audio/mpeg">
										</audio>
										<br><br>
										<button class="button is-info">    Comments </button>
										<button class="button is-danger">  Likes    </button>
										<button class="button is-success"> Favorite </button>
										<button class="button is-link">    Download </button>
										</div>
									</div>
								</article>
								';
							}
						} else {
						// Connect to the db
							$conn = new mysqli("localhost", "root", "", "reverb");
							// We want ALL our user tables
							$result=mysqli_query($conn,"SELECT * FROM `audio`");
							while ($row = $result->fetch_assoc()) {
								echo '
								<article class="media">
									<figure class="media-left">
										<p class="image is-128x128">
										<img src="https://bulma.io/images/placeholders/128x128.png">
										</p>
									</figure>
									<div class="media-content">
										<div class="content">
										<p>
											<strong>' . $row['Filename'] . '</strong> 
											<span class="tag is-rounded is-info"> @' . $row['Artist'] . '</span>
											<span class="tag is-rounded">' . $row['Album'] . '</span>
											<br>
										</p>
										<audio controls autoplay muted>
											<source src="test.mp3" type="audio/mpeg">
										</audio>
										<br><br>
										<button class="button is-info">    Comments </button>
										<button class="button is-danger">  Likes    </button>
										<button class="button is-success"> Favorite </button>
										<button class="button is-link">    Download </button>
										</div>
									</div>
								</article>
								';	
							}
						}
					?>
				</tbody>
			
			</div>			
		</div>
		
	</body>
	
</HTML>