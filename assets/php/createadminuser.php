<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	include '../../config.php';
	$adminuser = $_POST['adminusername'];
	$adminpassword = $_POST['adminpassword'];
	$hashed_password = password_hash( $adminpassword, PASSWORD_DEFAULT );
	$email = "admin";
	$sql = "INSERT INTO users (username, password, email) VALUES ('$adminuser', '$hashed_password', '$email')";
	if ( 1 == 1 ) {
		$result = $link->query($sql);
		header("location: $path/login");
	}
}
?>