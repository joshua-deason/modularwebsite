<?php 


if( $config['configfinished'] == 1 && $_SESSION['admin'] == 0 ) {
	header( "location: login.php" );
}
include "assets/php/setup.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $website_title; ?> || Setup</title>
	<?php include $headtags; ?>
</head>
<body>
	<?php if ( $include_navbar == "yes" ){ include $navbar; } ?>
	<div class="content">
		<div style="margin-top: 10px;"><?php echo $notification; ?></div>
		<div class="col-xs-12 col-sm-10 col-md-8 col-lg-4 centered">
		<br>
		<form method="post" action="<?php $_PHP_SELF ?>" class="adduser" style="background-color: #5e72e4; padding: 30px; border-radius: 25px; vertical-align: middle;">
			<center>
				<div class="form-group">
					<input type = "text" placeholder = "Database Server" name = "server" id = "server" class="form-control" value="<?php echo decryptString($config['dbserver'], 990) ?>">
				</div>
				<div class="form-group">
					<input type = "text" placeholder = "Database Username" name = "username" id = "username" class="form-control" value="<?php echo decryptString($config['dbusername'], 73198256) ?>">
				</div>
				<div class="form-group">
					<input type = "password" placeholder = "Database Password" name = "password" id = "password" class="form-control" value="<?php echo decryptString($config['dbpassword'], "how secure could i possibly make this, if i make it any more secure it will be impossible") ?>">
				</div>
				<div class="form-group">
					<input type = "text" placeholder = "Database Name" name = "name" id = "name" class = "form-control"value="<?php echo decryptString($config['dbname'], 65725) ?>">
				</div>
				<div class="form-group">
					<input type = "text" placeholder = "Website Title" name = "websitetitle" id = "websitetitle" class = "form-control" value="<?php echo $config['websitetitle'] ?>">
				</div>
				<div class="form-group">
					<input type = "text" placeholder = "Website URL" name = "websiteurl" id = "websiteurl" class = "form-control" value="<?php echo $config['websiteurl'] ?>">
				</div>
				<button class="btn btn-info" name="submit" id="submit" type="submit">Set Configuration</button></center>
		</form>
		<?php if($config['configfinished'] == 1): ?>
			<form action="createadminuser.php?auth=whousesauthtokensthesedayslol">
				<button class="btn btn-info" type="submit">Create Admin User</button>
			</form>
		<?php endif; ?>

		
	</div>
	
	<?php include $jstags; ?>
</body>
</html>