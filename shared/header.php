<!-- Header Page / Navigator Tab that is shared across every single page on the website -->

<!-- Mockup Header + navbar -->
<img src="..\resources\reverb_banner.png" alt="Reverb: the Audio File Database" id="banner">		
<div class="tabs is-boxed is-centered main-menu" id="nav">
    <ul>
        <li data-target="pane-1" id="1">
            <a href="..\user\home.php">
                <span>Home</span>
            </a>
        </li>
        <li data-target="pane-2" id="2">
            <a href="..\user\database.php">
                <span>Audio Files</span>
            </a>
        </li>
        <li data-target="pane-3" id="3">
            <a>
                <span>Forums</span>
            </a>
        </li>
		
		<?php
		// First, do we have a valid session to check
		if($_SESSION['username'] ?? null)
		{			
			echo '<li data-target="pane-4" id="4">
					<a href="..\admin\login.php">
						<span>' . $_SESSION['username'] . '</span>
					</a>
				</li>';
		}
		else
		{
			echo '<li data-target="pane-4" id="4">
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
				echo '<li data-target="pane-5" id="5">
					<a href="..\admin\adminDashboard.php">						
						<span>Administrator</span>
					</a>
				</li>';
			}
		}		
		?>
    </ul>
</div>

<!--
<li data-target="pane-4" id="4" class="is-active" >
            <a href="..\admin\login.html">
                <span>Sign In</span>
            </a>
        </li>
-->