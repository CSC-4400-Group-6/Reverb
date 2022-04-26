<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reverb";
  
  echo "Username: ", $_POST["uname"], "<br>";
  echo "Password: ", $_POST["pword"], "<br>";
  echo "Confirm Password: ", $_POST["confirmpword"], "<br>";
  echo "Security Question 1: ", $_POST["secQ1"], "<br>";
  echo "Security Question 2: ", $_POST["secQ2"], "<br>";
  echo "Security Question 3: ", $_POST["secQ3"], "<br>";
  
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
  $confpassword=$_POST["confirmpword"];
  $security1=$_POST["secQ1"];
  $security2=$_POST["secQ2"];
  $security3=$_POST["secQ3"];
  
  if($password = $confpassword)
  {
	    $query="INSERT INTO `user` (`IDUser`, `Username`, `Password`, `IsAdmin`, `SecurityQuestion1`, `SecurityQuestion2`, `SecurityQuestion3`) VALUES (NULL, '$username', '$password', '0', '$security1', '$security2', '$security3');";
	    $result=mysqli_query($conn, $query);
		//Redirect user to password reset page if they are in the database
		echo "Account sucessfully registered. Redirecting to log in page... <br>";
		header("Location:..\admin\login.php", true, 301);
	 
  }
  else
  {
	  echo "The passwords didn't match <br>";
  }
  

?>
