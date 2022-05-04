<?php
// We need to have this to persist data between pages
session_start();

$target_dir = "../musicFiles/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
  echo "<script>alert('Sorry, file already exists.'); window.location.href='../user/database.php';</script>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "mp3") {
  echo "<script>alert('Sorry, only MP3 files are allowed.'); window.location.href='../user/database.php';</script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.'); window.location.href='../user/database.php';</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	addToDB($target_file);
  } else {
	echo "<script>alert('Sorry, there was an error uploading your file.'); window.location.href='../user/database.php';</script>";
  }
}

function addToDB($finalPath) {  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reverb";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    echo("Connection failed <br>");
  }else {
	echo("Connected <br>");
  }
  
  // Sanity print our vars
  echo "Display Name: ", $_POST["displayName"],       "<br>";
  echo "Artist:: ",      $_POST["artist"],            "<br>";
  
  // Put em into vars
  $displayName=$_POST["displayName"];
  $artist=$_POST["artist"];
  
  // Run our sql logic
  $query="INSERT INTO `audio` (`audioID`, `Filename`, `Artist`, `filePath`) VALUES (NULL, '$displayName', '$artist', '$finalPath');";
  $result=mysqli_query($conn,$query);
  
  // Assume logic worked and return to home page
  echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.'); window.location.href='../user/database.php';</script>";
}

?>

