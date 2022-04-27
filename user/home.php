<?php session_start(); ?>

<script>
var clicked;
function submitForm(that) {
	if(clicked == 1) {
		const $target = document.getElementById("modal-js-edit-announcement")
		const $title = document.getElementById("edit-title")
		const $body = document.getElementById("edit-body")
		$title.value = that.title.value
		$body.value = that.body.value
		
		const $ID = document.getElementById("edit-ID")
		$ID.value = that.ID.value
		
		const $timestamp = document.getElementById("edit-timestamp")
		$timestamp.value = that.timestamp.value
		
		$target.classList.add('is-active');
	} else {
		const $target = document.getElementById("modal-js-delete-announcement")
		
		const $ID = document.getElementById("delete-ID")
		$ID.value = that.ID.value
		
		$target.classList.add('is-active');
	}
}
</script>

<HTML>
	<head>
		<!--Title of the tab on your web browser-->
		<title>Reverb</title>
		<meta charset=utf-8>
		<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
		<link rel="stylesheet"href="temp.css">
	</head>
	<body>
	
		<!-- Init the header -->
		<?php include("../shared/header.php"); ?>
		<!-- Highlight the page we are currently on -->
		<script type="module">
			document.getElementById('1').className += 'is-active';
		</script>
		
		<!--Container block that all content goes into. It's a big box.-->
		<!--If you need a new container, make a new div below this. main-content1 for usual row spacing, and main-content2 for column spacing.-->
		
		<div class="container">
			<!-- START ARTICLE FEED -->
			<section class="articles">
				<div class="column is-8 is-offset-2">
				
					<?php
					// Modal that is hidden until opened
					include("../logic/addAnnouncement.php");
					include("../logic/editAnnouncement.php");
					include("../logic/deleteAnnouncement.php");
					// Super secret Admin functions
					if($_SESSION['IsAdmin'] ?? null)
					{
						if($_SESSION['IsAdmin'] == 1)
						{
							echo '<div class="columns is-mobile is-centered">
									<button class="button is-block is-half is-info is-large js-modal-trigger" data-target="modal-js-example"> Add Announcement </button>
								  </div>';
						}
					}
					?>
					
				
					<?php 
					// Connect to the db
					$conn = new mysqli("localhost", "root", "", "reverb");
					// We want ALL our announcements
					$result=mysqli_query($conn,"SELECT * FROM `announcement` ORDER BY 1 DESC;");
					while ($row = $result->fetch_assoc()) {
						// First, do we have a valid session to check
						if($_SESSION['IsAdmin'] ?? null)
						{
							// We only show the administrator panel to admins
							if($_SESSION['IsAdmin'] == 1)
							{
							echo	'<form action = "" onsubmit="submitForm(this); return false;">
									<input type="hidden" name="ID"        value="' . $row['AnnouncementID'] .  '">
									<input type="hidden" name="title"     value="' . $row['Title'] .           '">
									<input type="hidden" name="body"      value="' . $row['Body'] .            '">
									<input type="hidden" name="creator"   value="' . $row['Creator'] .         '">
									<input type="hidden" name="timestamp" value="' . $row['Timestamp'] .       '">
									<div class="card article">
										<div class="card-content">
											<div class="media">
												<div class="media-content has-text-centered">
													<p class="title article-title">' . $row['Title'] . '</p>
													<div class="tags has-addons level-item">
														<span class="tag is-rounded is-info">@' . $row['Creator']   . '</span>
														<span class="tag is-rounded">'          . $row['Timestamp'] . '</span>
													</div>													
													<input class="button is-warning" type="submit" onclick="clicked=1" value="Edit"> </input> 
													<input class="button is-danger"  type="submit" onclick="clicked=2" name="delete"  value="Delete Post"> </input> 
												</div>
											</div>
											<div class="content article-body">
												<p>' . $row['Body'] . '</p>
											</div>
										</div>
									</div>
									</form>';
							}
						}
						else {
							echo	'<div class="card article">
										<div class="card-content">
											<div class="media">
												<div class="media-content has-text-centered">
													<p class="title article-title">' . $row['Title'] . '</p>
													<div class="tags has-addons level-item">
														<span class="tag is-rounded is-info">@' . $row['Creator'] . '</span>
														<span class="tag is-rounded">' . $row['Timestamp'] . '</span>
													</div>
												</div>
											</div>
											<div class="content article-body">
												<p>' . $row['Body'] . '</p>
											</div>
										</div>
									</div>';	
						}
					}
					?>
					
				</div>
			</section>
			<!-- END ARTICLE FEED -->
		</div>
		
		

<!-- HAAAAAAAAAAAX -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  // Functions to open and close a modal
  function openModal($el) {
    $el.classList.add('is-active');
  }

  function closeModal($el) {
    $el.classList.remove('is-active');
  }

  function closeAllModals() {
    (document.querySelectorAll('.modal') || []).forEach(($modal) => {
      closeModal($modal);
    });
  }

  // Add a click event on buttons to open a specific modal
  (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
    const modal = $trigger.dataset.target;
    const $target = document.getElementById(modal);
    console.log($target);

    $trigger.addEventListener('click', () => {
      openModal($target);
    });
  });

  // Add a click event on various child elements to close the parent modal
  (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
    const $target = $close.closest('.modal');

    $close.addEventListener('click', () => {
      closeModal($target);
    });
  });

  // Add a keyboard event to close all modals
  document.addEventListener('keydown', (event) => {
    const e = event || window.event;

    if (e.keyCode === 27) { // Escape key
      closeAllModals();
    }
  });
});
</script>
		
	</body>
</HTML>