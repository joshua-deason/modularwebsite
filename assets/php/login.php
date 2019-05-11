<?php 
$alreadyloggedin = "<div class='alert alert-info alert-dismissible fade show' role='alert'>
	<span class='alert-inner--text'>You are already logged in as " .  $_SESSION['username'] . ", <a href=\"welcome\">Continue to welcome page?</a></span>
  <button type='button'class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";


if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  $notification = createNotification( "success", "You are already loggedin as " . $_SESSION['username'] . ", <a href=\"welcome\">Continue to welcome page?</a>" );
} 
$color = "5e72e4";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $password ="";

	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql = "SELECT * FROM users WHERE username = '$username'"	;
	$result = $link->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$id = $row["id"];
			$username = $row["username"];
			$hashed_password = $row["password"];
			$admin = $row["admin"];
		}
		if (password_verify($password, $hashed_password)) {
			session_start();
			$_SESSION["loggedin"] = true;
      $_SESSION["id"] = $id;
      $_SESSION["username"] = $username;
      $_SESSION["admin"] = $admin;
			// This is to update the most recent login in the database
			$add_timestamp = "UPDATE users SET last_login = NOW() WHERE username = '$username'";
			$time_result = $link->query($add_timestamp);
			
			// Add this login to the log
      log_item( "login", "$username logged in at $now\n");

			// Redirect user to welcome page
      header("location: welcome");
		}else {
			// Incorect password
			$password_err = "Incorrect Password.";
			$color = "f54e1b";
      log_item( "login", "Incorrect password on user: $username at: " . $now . "\n" );
		}
	}else {
			$username_err = "That user does not exist.";
			$color = "f54e1b";
	}
}

?>