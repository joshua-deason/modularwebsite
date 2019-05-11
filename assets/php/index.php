<?php
	if($_SERVER["REQUEST_METHOD"] == "GET") {
		$error = $_GET["p"];
		if ( $error == "nosi" ) {
			$notification = createNotification( "error", "Signups are currently disabled, please talk to the webmaster to have this fixed" );
		}
	}

?>