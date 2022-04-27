<?php
  // We need to have this to persist data between pages
  session_start();
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reverb";
  

  echo "ID: ",        $_POST['ID'],           "<br>";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    echo("Connection failed <br>");
  }else {
	echo("Connected <br>");
  }
  
  $ID=$_POST['ID'];
  
  
  $query="DELETE from announcement WHERE `AnnouncementID`= '$ID';";
  $result=mysqli_query($conn,$query);
  
  header("Location:..\user/home.php", true, 301);

?>
