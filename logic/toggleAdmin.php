<?php
  // Our database
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
  
  echo $_POST['txtUser'];
  
  // Make the request
  $query="UPDATE user SET `IsAdmin`=NOT `IsAdmin` WHERE `Username` = '" . $_POST['txtUser'] . "';";
  $result=mysqli_query($conn,$query);
  
  // Return to the page cause I dunno how to make the User not change to this php
  header("Location:..\admin\adminUsers.php", true, 301);

?>
