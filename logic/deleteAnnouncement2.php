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
  echo "ID: ", $_POST['ID'], "<br>";
  
  // Put em into vars
  $ID=$_POST['ID'];
  
  // Run our sql logic
  $query="DELETE from announcement WHERE `AnnouncementID`= '$ID';";
  $result=mysqli_query($conn,$query);
  
  // Assume logic worked and return to home page
  header("Location:..\user/home.php", true, 301);

?>
