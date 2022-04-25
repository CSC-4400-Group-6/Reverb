<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "reverb";

  echo "Username: ", $_POST["uname"], "<br>";
  //The below sanity checks don't work. Don't think about it too hard, the rest of the code works fine.
  //echo "Security Question 1: ", $_POST["secQ1"], "<br>";
  //echo "Security Question 2: ", $_POST["secQ2"], "<br>";
  //echo "Security Question 3: ", $_POST["secQ3"], "<br>";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    echo("Connection failed <br>");
  }else {
	echo("Connected <br>");
  }
  
  $username=$_POST["uname"];
  $securityAns=$_POST["secAns"];
  $query1="SELECT * FROM `user` WHERE `Username`='$username' AND `SecurityQuestion1`='$securityAns';";
  $query2="SELECT * FROM `user` WHERE `Username`='$username' AND `SecurityQuestion2`='$securityAns';";
  $query3="SELECT * FROM `user` WHERE `Username`='$username' AND `SecurityQuestion3`='$securityAns';";
  
  $result1=mysqli_query($conn,$query1);
  $result2=mysqli_query($conn,$query2);
  $result3=mysqli_query($conn,$query3);
  
  $count1=mysqli_num_rows($result1);
  $count2=mysqli_num_rows($result2);
  $count3=mysqli_num_rows($result3);
  if($count1 == 1 || $count2 == 1 || $count3 == 1 )
  {
		//Redirect user to password reset page if they are in the database
		echo "You are in the database. Redirecting to Password Reset...";
		header("Location:..\admin\passwordReset.php", true, 301);
  }
  else
  {
	  echo "BEGONE IMPOSTER <br>";
	  header("Location:..\admin\login.php", true, 301);
  }

?>
