<?php 
$notification = "";
$success_message = "<div class='alert alert-info alert-dismissible fade show' role='alert'>
	<span class='alert-inner--text'><strong>Success!</strong> Password Changed Successfully</span>
  <button type='button'class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
$unmatched = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <span class='alert-inner--text'><strong>Error</strong> New Passwords do not match</span>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
    </button>
</div>";
$wrongpass = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <span class='alert-inner--text'><strong>Error</strong> Old Password is incorrect</span>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
    </button>
</div>";






	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_SESSION["username"];
		$hashed_original_password = $oldpassword = $newpassword = $confirmpassword = "";
		
		$oldpassword = $_POST["oldpassword"];
		$newpassword = $_POST["newpassword"];
		$confirmpassword = $_POST["confirmpassword"];
		if($debug == true){echo 'Information recieved ||';}
		if($newpassword == $confirmpassword){
			$checkoldpassword = "SELECT * FROM users WHERE username = '$username'";
			if($debug == true){echo 'Pulling user data ||';}
			$result = $link->query($checkoldpassword);
			if($result->num_rows > 0){
				if($debug == true){echo 'User Data Loaded ||';}
				while($row = $result->fetch_assoc()){
					$hashed_original_password = $row["password"];
				}
			if($debug == true){echo 'Password Recieved ||';}
			} else {
				if($debug == true){echo 'User Data Failed ||';}
			}
			// Check old password to confirm change
			if (password_verify($oldpassword, $hashed_original_password)){
				$newhashedpassword = password_hash($newpassword, PASSWORD_DEFAULT);
				$updatepassword = "UPDATE users SET password = '$newhashedpassword' WHERE username = '$username'";
				$newresult = $link->query($updatepassword);
				$notification = createNotification( "success", "Password Changed Successfully" );
			} else {
				$notification = createNotification( "error", "Old Password is incorrect");
			}
			
			// Done checking old password
		} // End confirm two passwords 
		else{
			$notification = createNotification( "error" , "New Passwords do not match!" );
		}
	}
?>