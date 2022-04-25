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
  $username=$_POST["uname"];
  if($password = $confpassword)
  {
	    $query="UPDATE user SET Password='$password' WHERE Username='$username';";
	    $result=mysqli_query($conn, $query);
		//Redirect user to password reset page if they are in the database
		echo "Password Reset successfully. Redirecting to log in page...";
		header("Location:..\admin\login.php", true, 301);
	 
  }
  else
  {
	  echo "The passwords didn't match <br>";
  }
  

?>
