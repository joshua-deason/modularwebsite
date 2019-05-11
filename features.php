<?php 
// Should the user be logged in?
$require_loggedin = "no";
// Should the navbar appear?
$include_navbar = "index";

// Basic config file
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $website_title; ?> || Features</title>
	<?php include $headtags; ?>
</head>
<body>
<?php if ( $include_navbar == "yes" ){ include $navbar; } elseif ( $include_navbar == "index" ) { include $mainnavbar; } ?>
	<div class="content">
		<? echo $notification ?>
			<h2>Features</h2>
	This is a website that is built with a preexisting llogin page as the base package, and as you please you can download
	more packages. <br><u>Currently complete packages include: Notes</u>.
		
		
		
	</div>
	
	<?php include $jstags; ?>
</body>
</html>