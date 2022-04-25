<div id="modal-js-example" class="modal">
  <div class="modal-background"></div>

  <div class="modal-content">
    <div class="box">	
	
		<h1 class="title has-text-centered"> Add Announcement </h1>
		<form action = "../logic/addAnnouncement2.php" method = "post" >
			<input class="input is-primary" name="title" type="text" placeholder="Title">
			<br><br>
			<textarea class="textarea is-info" name="body" placeholder="Body"></textarea>	
			<br><br>
			<button class="button is-block is-info is-large is-fullwidth"> Post Announcement </button>
		</form>

    </div>
  </div>

  <button class="modal-close is-large" aria-label="close"></button>
</div>