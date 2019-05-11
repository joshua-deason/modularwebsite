<?php 
// Should the user be logged in?
$require_loggedin = "yes";
// Should the navbar appear?
$include_navbar = "yes";

// Basic config file
include "config.php";

// Include PHP code
include "$path/assets/php/resetpassword.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $website_title; ?> || Reset Password</title>
	<?php include $headtags; ?>
</head>
<body>
	<?php if ( $include_navbar == "yes" ){ include $navbar; } ?>
	<div class="content">
		<? echo $notification ?>
		<div class="col-xs-12 col-sm-10 col-md-8  col-lg-4 centered">
			<br>
			<form method="post" action="<?php $_PHP_SELF ?>" class="adduser" style="background-color: #5e72e4; padding: 30px; border-radius: 25px; vertical-align: middle;">
				<center>
					<div class="form-group">
          	<label for="oldpassword">Please enter your old password</label>
						<input type = "password" placeholder = "Password" name = "oldpassword" id = "oldpassword" class="form-control">
					</div>
					<div class="form-group">
          	<label for="newpassword">Please enter your new password</label>
						<input type = "password" placeholder = "New PAssword" name = "newpassword" id = "newpassword" class="form-control">
					</div>
  				<div class="form-group">
          	<label for="confirmpassword">Please confirm your new password</label>
						<input type = "password" placeholder = "Confirm Password" name = "confirmpassword" id = "confirmpassword" class="form-control">
					</div>
					<button class="btn btn-info" name="submit" id="submit" type="submit">Change Password</button></center>
				<div class="error"><?php echo $error ?></div>
		</form>
	</div>
		
		
		
	</div>
	
	<?php include $jstags; ?>
</body>
</html>