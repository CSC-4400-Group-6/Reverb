<?php
  // We need to have this to persist data between pages
  session_start();
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reverb";
  
  echo "Title: ",     $_POST["title"],        "<br>";
  echo "Body: ",      $_POST["body"],         "<br>";
  echo "ID: ",        $_POST['ID'],           "<br>";
  
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
  $ID=$_POST['ID'];
  $timestamp=$_POST['timestamp'];
  
  
  $query="UPDATE announcement set `Title` = '$title', `Body` = '$body' where `AnnouncementID`= '$ID';";
  $result=mysqli_query($conn,$query);
  
  header("Location:..\user/home.php", true, 301);

?>
