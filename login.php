<?php 
$require_loggedin = "no";
// Basic config file
include "config.php";
// Include the code for login
include "$path/assets/php/login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $website_title; ?> || Login</title>
	<?php include $headtags; ?>
</head>
<body>
	<div class="content">
		<div style="margin-top: 10px;"><?php echo $notification; ?></div>
		<div class="col-xs-12 col-sm-10 col-md-8 col-lg-4 login-centered">
		<br>
		<form method="post" action="<?php $_PHP_SELF ?>" class="adduser" style="background-color: #<?php echo $color ?>; padding: 30px; border-radius: 25px; vertical-align: middle;">
			<center>
				<div class="form-group">
					<input type = "text" placeholder = "Username" name = "username" id = "username" class="form-control">
				</div>
				<div class="form-group">
					<input type = "password" placeholder = "Password" name = "password" id = "password" class="form-control">
				</div>
				<button class="btn btn-info" name="submit" id="submit" type="submit">Login</button></center>
				<?php echo $password_err ?> <?php echo $username_err ?>
		</form>
	</div>
		
		
		
		
		
	</div>
	
	<?php include $jstags; ?>
</body>
</html>