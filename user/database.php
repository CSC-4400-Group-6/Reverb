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
			
				<div class="field has-addons">
					<div class="control is-expanded">
						<input class="input" type="text" placeholder="Search:">
					</div>
					<div class="control">
						<a class="button is-info">
							Search
						</a>
					</div>
				</div>
				
				<div class="field is-horizontal">
					<div class="field-label is-normal">
						<label class="label">Search by Tag:</label>
					</div>
					<div class="field-body">
						<div class="field">
							<p class="control is-expanded has-icons-left">
								<input class="input" type="text">
								<span class="icon is-small is-left">
									<i class="fas fa-user"></i>
								</span>
							</p>
						</div>
					</div>
				</div>
				
				<div class="field">
					<div class="control">
						<div class="select">
						<select>
							<option>Add Tag...</option>
							<option>Music</option>
							<option>Sound FX</option>
						</select>
						</div>
					</div>
				</div>
				
				<hr>
				
				<!-- START AUDIO ENTRY -->
				<article class="media">
					<figure class="media-left">
						<p class="image is-128x128">
						<img src="https://bulma.io/images/placeholders/128x128.png">
						</p>
					</figure>
					<div class="media-content">
						<div class="content">
						<p>
							<strong>Song Name</strong> <small>@Artist</small> <small>Album</small>
							<br>
						</p>
						<audio controls autoplay muted>
							<source src="test.mp3" type="audio/mpeg">
						</audio>
						<br><br>
						<button class="button">Comments (X) </button>
						<button class="button">Likes (Y) </button>
						<button class="button">Favorite </button>
						<button class="button">Download </button>
						</div>
					</div>
				</article>
				<!-- END AUDIO ENTRY -->
				
				<!-- START AUDIO ENTRY -->
				<article class="media">
					<figure class="media-left">
						<p class="image is-128x128">
						<img src="https://bulma.io/images/placeholders/128x128.png">
						</p>
					</figure>
					<div class="media-content">
						<div class="content">
						<p>
							<strong>Song Name</strong> <small>@Artist</small> <small>Album</small>
							<br>
						</p>
						<audio controls autoplay muted>
							<source src="test.mp3" type="audio/mpeg">
						</audio>
						<br><br>
						<button class="button">Comments (X) </button>
						<button class="button">Likes (Y) </button>
						<button class="button">Favorite </button>
						<button class="button">Download </button>
						</div>
					</div>
				</article>
				<!-- END AUDIO ENTRY -->
				
				<!-- START AUDIO ENTRY -->
				<article class="media">
					<figure class="media-left">
						<p class="image is-128x128">
						<img src="https://bulma.io/images/placeholders/128x128.png">
						</p>
					</figure>
					<div class="media-content">
						<div class="content">
						<p>
							<strong>Song Name</strong> <small>@Artist</small> <small>Album</small>
							<br>
						</p>
						<audio controls autoplay muted>
							<source src="test.mp3" type="audio/mpeg">
						</audio>
						<br><br>
						<button class="button">Comments (X) </button>
						<button class="button">Likes (Y) </button>
						<button class="button">Favorite </button>
						<button class="button">Download </button>
						</div>
					</div>
				</article>
				<!-- END AUDIO ENTRY -->
			
			</div>			
		</div>
		
	</body>
	
</HTML>