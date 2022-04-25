<?php
  // We need to have this to persist data between pages
  session_start();
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reverb";
  
  echo "Username: ", $_POST["uname"], "<br>";
  echo "Password: ", $_POST["pword"], "<br>";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    echo("Connection failed <br>");
  }else {
	echo("Connected <br>");
  }
  
  $username=$_POST["uname"];
  $password=$_POST["pword"];
  $query="SELECT * FROM `user` WHERE `Username`='$username' AND `Password`='$password';";
  $result=mysqli_query($conn,$query);
  $count=mysqli_num_rows($result);
  if($count == 1)
  {
	  $_SESSION['username'] = $username;
	  $_SESSION['password'] = $password;
	  echo "Welcome " . $_SESSION['username'] . "<br>";
	  $row = mysqli_fetch_assoc($result);
	  $_SESSION['IsAdmin'] = $row['IsAdmin'];
	  echo "IsAdmin " . $row['IsAdmin'] . "<br>";
	  if($row['IsAdmin'] == 1)
	  {
		  echo "YOU ARE AN ADMIN";
		  header("Location:..\admin\adminDashboard.php", true, 301);
		  exit;
	  }
	  else
	  {
		  echo "Regular ol User";
		  echo "YOU ARE AN ADMIN";
		  header("Location:..\admin\login.php", true, 301);
	  }  
  }
  else
  {
	  echo "BEGONE IMPOSTER <br>";
	  header("Location:..\admin\login.php", true, 301);
	  session_destroy();
  }

?>
