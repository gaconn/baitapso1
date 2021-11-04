<?php
	
	if(isset($_GET["logout"])){
		if(isset($_SESSION["admin"])) unset($_SESSION["admin"]);
		header("location: ../user/index.php");
	}
?>
<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">John Doe</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />
				<a href="#" title="View the Site">View the Site</a> | <a href="?logout=true" title="Sign Out" style="font-size: 1.5rem; color: orange;">Sign Out</a>
			</div> 