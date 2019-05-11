<?php 
// Should the user be logged in?
$require_loggedin = "yes";
// Should the navbar appear?
$include_navbar = "yes";

// Basic config file
include "../../config.php";
include "php/displaynote.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $website_title . " || " . $title; ?></title>
	<?php include $headtags; ?>
</head>
<body>
	<?php if ( $include_navbar == "yes" ){ include $navbar; } ?>
	<div class="content">


<?php if ( $owner == $_SESSION["id"]) : ?>

		<div class="row">
			<div class="col-4">
				<div class="card">
		  		<div class="card-header">
		    		<?php echo $title; ?>
		  		</div>
		  		<div class="card-body">
		    		<!--<h5 class="card-title">Special title treatment</h5>-->
		    		<p class="card-text"><?php echo $content ?></p>
		    		<a href="deletenote?id=<?php echo $id ?>" class="btn btn-primary">Delete Note</a><a href="editnote?id=<?php echo $id ?>" class="btn btn-primary">Edit Note</a>
		  		</div>
				</div>
			</div>
		</div>
	</div>
<?php else: ?>
	<?php 
		$notification = createNotification( "error", "You do not own this note!" ); 
	?>
<?php endif ?>
	<?php echo $notification; ?>
	<?php include $jstags; ?>
</body>
</html>