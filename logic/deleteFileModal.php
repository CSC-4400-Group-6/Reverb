<div id="modal-js-delete-file" class="modal">
  <div class="modal-background"></div>

  <div class="modal-content">
    <div class="box">	
	
		<h1 class="title has-text-centered"> Are you sure you want to delete this audio file? </h1>
		<form action = "../logic/deleteFileLogic.php" method = "post" >
			<input type="hidden" name="ID" id="delete-ID" value="">
			<input type="hidden" name="filePath" id="filePath-ID" value="">
			<button class="button is-block is-danger is-large is-fullwidth"> Delete File </button>
		</form>

    </div>
  </div>

  <button class="modal-close is-large" aria-label="close"></button>
</div>