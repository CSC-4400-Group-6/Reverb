<!-- Header Page / Navigator Tab that is shared across every single page on the website -->

<!-- Banner -->
<img src="..\resources\reverb_banner.png">
<!-- Navbar that links all our pages together -->
<div class="tabs is-boxed is-centered main-menu">
    <ul>
	
        <li id="1">
            <a href="..\user\home.php">
                <span>Announcements</span>
            </a>
        </li>
		
        <li id="2">
            <a href="..\user\database.php">
                <span>Audio Files</span>
            </a>
        </li>
		
		<?php
		// First, do we have a valid session to check
		if($_SESSION['username'] ?? null)
		{			
			echo '<li id="4">
					<a href="..\admin\login.php">
						<span>' . $_SESSION['username'] . '</span>
					</a>
				</li>';
		}
		else
		{
			echo '<li id="4">
					<a href="..\admin\login.php">
						<span>Sign In</span>
					</a>
				</li>';
		}
		?>
        		
		<?php
		// First, do we have a valid session to check
		if($_SESSION['IsAdmin'] ?? null)
		{			
			// We only show the administrator panel to admins
			if($_SESSION['IsAdmin'] == 1)
			{
				echo '<li id="5">
					<a href="..\admin\adminDashboard.php">						
						<span>Administrator</span>
					</a>
				</li>';
			}
		}		
		?>
		
    </ul>
</div>