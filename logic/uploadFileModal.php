<div id="modal-js-file-upload" class="modal">
  <div class="modal-background"></div>

  <div class="modal-content">
    <div class="box">	
	
		<h1 class="title has-text-centered"> Upload File </h1>
		<form action="../logic/uploadFile.php" method="post" enctype="multipart/form-data">
			<input class="input is-primary is-large" name="displayName" type="text" placeholder="Display Name">
			<br><br>
			<input class="input is-info is-large" name="artist" placeholder="Artist"></input>	
			<br><br>
			<div id="file-js-example" class="file has-name is-centered is-large">
				<label class="file-label">
					<input class="file-input" type="file" accept="audio/mp3" name="fileToUpload" id="fileToUpload">
					<span class="file-cta">
						<span class="file-icon"> <i class="fas fa-upload"></i> </span>
						<span class="file-label"> Choose a file… </span>
					</span>
					<span class="file-name">  No File chosen </span>
				</label>
			</div>
			<br>
			<div class="columns is-mobile is-centered">
				<input class= "button is-info is-large" type="submit" value="Upload File" name="submit">
			</div>
			
		</form>

    </div>
  </div>

  <button class="modal-close is-large" aria-label="close"></button>
</div>

<script>
  const fileInput = document.querySelector('#file-js-example input[type=file]');
  fileInput.onchange = () => {
    if (fileInput.files.length > 0) {
      const fileName = document.querySelector('#file-js-example .file-name');
      fileName.textContent = fileInput.files[0].name;
    }
  }
</script>