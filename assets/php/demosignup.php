<?php 

if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	$username = $password = $confirmpassword = $email = $confirmemail = "";
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];
	$email = $_POST["email"];
	$confirmemail = $_POST["confirmemail"];
	
	function confirmitems ( $itemone, $itemtwo ) {
		if ( $itemone == $itemtwo ) {
			return $itemone;
		} else {
			return "The check failed";
		}
		
	}
	if ( $password == $confirmpassword && $password != "" ) {
		$hashed_password = password_hash( $password, PASSWORD_DEFAULT );
		if ( $email == $confirmemail && $email != "" ) {
			$checkusername = "SELECT * FROM users WHERE username = '$username'";
			$unresult = $link->query($checkusername);
			if ($unresult->num_rows == 0) {
				$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";
				$result = $link->query($sql);
				header("location: login");
			} else {
				$notification = createNotification( "error", "User already exists!");
			}
		} else {
			$notification = createNotification( "error", "Emails do not match!" );
		}
	} else {
		$notification = createNotification( "error", "Passwords do not match!" );
	}
}



?>