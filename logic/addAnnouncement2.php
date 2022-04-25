<?php
  // We need to have this to persist data between pages
  session_start();
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reverb";
  
  echo "Title: ", $_POST["title"], "<br>";
  echo "Body: ", $_POST["body"], "<br>";
  echo "Admin: ", $_SESSION['username'], "<br>";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    echo("Connection failed <br>");
  }else {
	echo("Connected <br>");
  }
  
  $username=$_SESSION['username'];
  $title=$_POST["title"];
  $body=$_POST["body"];
  $query="INSERT INTO `announcement` (`AnnouncementID`, `Title`, `Body`, `Creator`, `Timestamp`) VALUES (NULL, '$title', '$body', '$username', current_timestamp());";
  $result=mysqli_query($conn,$query);
  
  header("Location:..\user/home.php", true, 301);

?>
