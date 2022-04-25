<?php session_start();

// First, do we have a valid session to check
if($_SESSION['IsAdmin'] ?? null)
{
	// We only show the administrator panel to admins
	if($_SESSION['IsAdmin'] == 1)
	{
		include("..\admin\adminDashboard2.php");
	}
	// Snoop pingas usual I see...
	else
	{
		echo "Not an admin, You shouldn't be here";
	}
}
// Not logged in, bail
else
{
	echo "go away";
}

 ?>