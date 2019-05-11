<?php 
// Should the user be logged in?
$require_loggedin = "no";
// Should the navbar appear?
$include_navbar = "index";

// Basic config file
include "config.php";
if ( $allowsignups == "0" ) {
	header( "location: index?p=nosi");
} else {
	include "$path/assets/php/demosignup.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $website_title; ?> || Signup</title>
	<?php include $headtags; ?>
</head>
<body>
	<?php if ( $include_navbar == "yes" ){ include $navbar; } elseif ( $include_navbar == "index" ) { include $mainnavbar; } ?>
	<div class="content">
		<center>
		<div style="margin-top: 10px;"><?php echo $notification; ?></div>
		<div class="col-xs-12 col-sm-10 col-md-8 col-lg-4 centered">
		<br>
		<form method="post" action="<?php $_PHP_SELF ?>" class="adduser" style="background-color: #5e72e4; padding: 30px; border-radius: 25px; vertical-align: middle;">
			<center>
				<div class="form-group">
					<input type = "text" placeholder = "Username" name = "username" id = "username" class="form-control">
				</div>
				<div class="form-group">
					<input type = "password" placeholder = "Password" name = "password" id = "password" class="form-control">
				</div>
				<div class="form-group">
					<input type = "password" placeholder = "Please Confirm Password" name = "confirmpassword" id = "confirmpassword" class="form-control">
				</div>
				<div class="form-group">
					<input type = "email" placeholder = "Email" name = "email" id = "email" class = "form-control">
				</div>
				<div class="form-group">
					<input type = "email" placeholder = "Please Confirm Email" name = "confirmemail" id = "confirmemail" class = "form-control">
				</div>
				<button class="btn btn-info" name="submit" id="submit" type="submit">Signup</button></center>
		</form>
	</div>
	</center>
		
		
	</div>
	
	<?php include $jstags; ?>
</body>
</html>