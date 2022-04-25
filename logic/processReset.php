<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reverb";
  
  echo "Password: ", $_POST["pword"], "<br>";
  echo "Confirm Password: ", $_POST["confirmpword"], "<br>";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    echo("Connection failed <br>");
  }else {
	echo("Connected <br>");
  }
  
  $password=$_POST["pword"];
  $confpassword=$_POST["confirmpword"];
  //$query="SELECT Password FROM `user` WHERE `Username`='$username' AND `SecurityQuestion1`='$security';"; //UPDATE user SET password='newpassword' WHERE username='$username';
  //$result=mysqli_query($conn,$query);
  //$count=mysqli_num_rows($result);
  //if($count == 1)
  //{
		//Redirect user to password reset page if they are in the database
		echo "Password Reset successfully. Redirecting to log in page...";
		header("Location:..\admin\login.php", true, 301);
  //}
  //else
  //{
	  //echo "BEGONE IMPOSTER <br>";
	  //header("Location:..\admin\login.php", true, 301);
  //}

?>
