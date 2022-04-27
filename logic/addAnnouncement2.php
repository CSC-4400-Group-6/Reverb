<?php
  // We need to have this to persist data between pages
  session_start();
  
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
  echo "Title: ", $_POST["title"],       "<br>";
  echo "Body: ",  $_POST["body"],        "<br>";
  echo "Admin: ", $_SESSION['username'], "<br>";
  
  // Put em into vars
  $username=$_SESSION['username'];
  $title=$_POST["title"];
  $body=$_POST["body"];
  
  // Run our sql logic
  $query="INSERT INTO `announcement` (`AnnouncementID`, `Title`, `Body`, `Creator`, `Timestamp`) VALUES (NULL, '$title', '$body', '$username', current_timestamp());";
  $result=mysqli_query($conn,$query);
  
  // Assume logic worked and return to home page
  header("Location:..\user/home.php", true, 301);

?>
