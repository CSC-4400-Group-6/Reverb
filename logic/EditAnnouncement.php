<div id="modal-js-edit-announcement" class="modal">
  <div class="modal-background"></div>

  <div class="modal-content">
    <div class="box">	
	
		<h1 class="title has-text-centered"> Edit Announcement </h1>
		<form action = "../logic/editAnnouncement2.php" method = "post" >
			<input type="hidden" name="ID" id="edit-ID" value="">
			<input type="hidden" name="timestamp" id="edit-timestamp" value="">
			<input class="input is-primary" name="title" id="edit-title" type="text" placeholder="Title">
			<br><br>
			<textarea class="textarea is-info" name="body" id="edit-body" placeholder="Body"></textarea>	
			<br><br>
			<button class="button is-block is-info is-large is-fullwidth"> Update Announcement </button>
		</form>

    </div>
  </div>

  <button class="modal-close is-large" aria-label="close"></button>
</div>