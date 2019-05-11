<?php 
// Should the user be logged in?
$require_loggedin = "yes";
// Should the navbar appear?
$include_navbar = "yes";

// Basic config file
include "../../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $website_title; ?> || List Notes</title>
	<?php include $headtags; ?>
</head>
<body>
	<?php if ( $include_navbar == "yes" ){ include $navbar; } ?>
	<div class="content">
		<?php echo $notification; ?>
			<?php include "php/listnotes.php"; ?>
		
		
	</div>
	
	<?php include $jstags; ?>
</body>
</html>