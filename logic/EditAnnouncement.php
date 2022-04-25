<?php
  // We need to have this to persist data between pages
  session_start();
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reverb";
  
  echo "Title: ",     $_POST["title"],        "<br>";
  echo "Body: ",      $_POST["body"],         "<br>";
  echo "Creator: ",   $_POST['creator'],      "<br>";
  echo "Timestamp: ", $_POST['timestamp'],    "<br>";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    echo("Connection failed <br>");
  }else {
	echo("Connected <br>");
  }
  
  $title=$_POST["title"];
  $body=$_POST["body"];
  $creator=$_POST['creator'];
  $timestamp=$_POST['timestamp'];
  
  if (isset($_POST['edit'])) {
	  echo "EDIT BUTTON <br>";
	}
  elseif (isset($_POST['delete'])) {
	  echo "DELETE BUTTON <br>";
	}
  else {
	echo "YOU SCREWED UP <br>";
    }
  
  //$query="INSERT INTO `announcement` (`AnnouncementID`, `Title`, `Body`, `Creator`, `Timestamp`) VALUES (NULL, '$title', '$body', '$username', current_timestamp());";
  //$result=mysqli_query($conn,$query);

?>
