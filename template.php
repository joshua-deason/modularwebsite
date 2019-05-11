<?php 
// Should the user be logged in?
$require_loggedin = "yes";
// Should the navbar appear?
$include_navbar = "index";

// Basic config file
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $website_title; ?> || Template</title>
	<?php include $headtags; ?>
</head>
<body>
<?php if ( $include_navbar == "yes" ){ include $navbar; } elseif ( $include_navbar == "index" ) { include $mainnavbar; } ?>
	<div class="content">
		<? echo $notification ?>
		
		
		
		
	</div>
	
	<?php include $jstags; ?>
</body>
</html>