<?php 
// Should the user be logged in?
$require_loggedin = "yes";
// Should the navbar appear?
$include_navbar = "yes";

// Basic config file
include "../../config.php";
include "php/createnote.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $website_title; ?> || Create Note</title>
	<?php include $headtags; ?>
</head>
<body>
	<?php if ( $include_navbar == "yes" ){ include $navbar; } ?>
	<div class="content">
		<?php echo $notification; ?>
		<div class="col-4 centered">
			<br>
			<form method="post" action="<?php $_PHP_SELF ?>" class="special" style="background-color: #5e72e4; padding: 30px; border-radius: 25px; vertical-align: middle;">
				<center>
					<div class="form-group">
						<input type = "text" placeholder = "Title" name = "title" id = "title" class="form-control">
					</div>
					<div class="form-group">
						<textarea placeholder="Contents" rows="20" name="content" id="content" class="form-control"></textarea>
					</div>
					<button class="btn btn-info" name="submit" id="submit" type="submit">Create Note</button></center>
			</form>
		</div>
		
		
	</div>
	
	<?php include $jstags; ?>
</body>
</html>