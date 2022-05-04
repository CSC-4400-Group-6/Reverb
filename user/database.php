<?php 
session_start();
// All our modals that are hidden until opened
include("../logic/modalLogic.php");
include("../logic/uploadFileModal.php");
include("../logic/deleteFileModal.php");
?>

<script>
var clicked;
function submitForm(that) {
	if(clicked == 2) {
		// Fill out the modal
		const $ID = document.getElementById("delete-ID")
		const $filepath = document.getElementById("filePath-ID")
		$ID.value = that.ID.value
		$filepath.value = that.filePath.value
		// Bring it up
		const $target = document.getElementById("modal-js-delete-file")
		$target.classList.add('is-active');
	} else {
		alert("you find yourself in a strange place")
	}
}
</script>

<HTML>
	<head>
		<!--Title of the tab on your web browser-->
		<title>Reverb Database</title>
		<meta charset=utf-8>
		<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
		<link rel="stylesheet"href="hometemp2.css">
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
			
				<!-- File Upload -->
				<div class="columns is-mobile is-centered">
					<button class="button is-block is-half is-info is-large js-modal-trigger" data-target="modal-js-file-upload"> Upload File </button>
				</div>
			
				<!-- User Search -->
				<form method="post">
					<div class="field has-addons">
						<div class="control is-expanded">
							<input class="input" type="text" name ="txtSearch" placeholder="Audio Name:">
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
						// ADMIN SHIZ
						if($_SESSION['IsAdmin'] ?? null)
						{
							// We only show the administrator panel to admins
							if($_SESSION['IsAdmin'] == 1)
							{
								if(isset($_POST['btnSearch'])) {
									// Connect to the db
									$conn = new mysqli("localhost", "root", "", "reverb");
									// We want ALL our user tables
									$result=mysqli_query($conn,"SELECT * FROM `audio` WHERE `Filename` LIKE '%" . $_POST['txtSearch'] . "%';");
									while ($row = $result->fetch_assoc()) {
										echo '
										<form action = "" onsubmit="submitForm(this); return false;">
										<input type="hidden" name="ID"        value="' . $row['audioID']  . '">
										<input type="hidden" name="filePath"  value="' . $row['filePath'] . '">
										<article class="media">
											<div class="media-content">
												<div class="content">
												<p>
													<strong>' . $row['Filename'] . '</strong> 
													<span class="tag is-rounded is-info"> @' . $row['Artist'] . '</span>
													<br>
												</p>
												<audio controls autostart="0">
													<source src="' . $row['filePath'] . '" type="audio/mpeg">
												</audio>
												<br><br>
												<a download class="button is-link" href="' . $row['filePath'] . '"> Download </a>
												<input class="button is-danger"  type="submit" onclick="clicked=2" value="Delete File"> </input> 
												</div>
											</div>
										</article>
										</form>
										';
									}
								} 
								else {
									// Connect to the db
									$conn = new mysqli("localhost", "root", "", "reverb");
									// We want ALL our user tables
									$result=mysqli_query($conn,"SELECT * FROM `audio`");
									while ($row = $result->fetch_assoc()) {
										echo '
										<form action = "" onsubmit="submitForm(this); return false;">
										<input type="hidden" name="ID"        value="' . $row['audioID'] . '">
										<input type="hidden" name="filePath"  value="' . $row['filePath'] . '">
										<article class="media">
											<div class="media-content">
												<div class="content">
												<p>
													<strong>' . $row['Filename'] . '</strong> 
													<span class="tag is-rounded is-info"> @' . $row['Artist'] . '</span>
													<br>
												</p>
												<audio controls autostart="0">
													<source src="' . $row['filePath'] . '" type="audio/mpeg">
												</audio>
												<br><br>
												<a download class="button is-link" href="' . $row['filePath'] . '"> Download </a>
												<input class="button is-danger"  type="submit" onclick="clicked=2" value="Delete File"> </input> 
												</div>
											</div>
										</article>
										</form>
										';	
									}
								}
							}
						}
						else {
							// REGULAR OL USER	
							if(isset($_POST['btnSearch'])) {
								// Connect to the db
								$conn = new mysqli("localhost", "root", "", "reverb");
								// We want ALL our user tables
								$result=mysqli_query($conn,"SELECT * FROM `audio` WHERE `Filename` LIKE '%" . $_POST['txtSearch'] . "%';");
								while ($row = $result->fetch_assoc()) {
									echo '
									<article class="media">
										<div class="media-content">
											<div class="content">
											<p>
												<strong>' . $row['Filename'] . '</strong> 
												<span class="tag is-rounded is-info"> @' . $row['Artist'] . '</span>
												<br>
											</p>
											<audio controls autostart="0">
												<source src="' . $row['filePath'] . '" type="audio/mpeg">
											</audio>
											<br><br>
											<a download class="button is-link" href="' . $row['filePath'] . '"> Download </a>
											</div>
										</div>
									</article>
									';
								}
							}
							else {
								// Connect to the db
								$conn = new mysqli("localhost", "root", "", "reverb");
								// We want ALL our user tables
								$result=mysqli_query($conn,"SELECT * FROM `audio`");
								while ($row = $result->fetch_assoc()) {
									echo '
									<article class="media">
										<div class="media-content">
											<div class="content">
											<p>
												<strong>' . $row['Filename'] . '</strong> 
												<span class="tag is-rounded is-info"> @' . $row['Artist'] . '</span>
												<br>
											</p>
											<audio controls autostart="0">
												<source src="' . $row['filePath'] . '" type="audio/mpeg">
											</audio>
											<br><br>
											<a download class="button is-link" href="' . $row['filePath'] . '"> Download </a>
											</div>
										</div>
									</article>
									';	
								}
							}
						}
					?>
				</tbody>
			
			</div>			
		</div>
		
	</body>
	
</HTML>