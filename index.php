<?php 
// Should the user be logged in?
$require_loggedin = "no";
// Should the navbar appear?
$include_navbar = "index";

// Basic config file
include "config.php";
include "$path/assets/php/index.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $website_title; ?> || Home</title>
	<?php include $headtags; ?>
</head>
<body>
	<?php if ( $include_navbar == "yes" ){ include $navbar; } elseif ( $include_navbar == "index" ) { include $mainnavbar; } ?>
	<div class="content">
		<div style="padding-top: 10px;"><? echo $notification ?></div>
  		<h2>Change Log</h2>
  			<h3>5/10/19</h3>
  				<ul>
  					<li>Added a navigation bar to front pages</li>
  				</ul>
  			<h3>5/6/19 - 5/9/19</h3>
  				<ul>
  					<li>Website down due to hosting issues</li>
  				</ul>
  			<h3>5/5/19</h3>
  				<ul>
  					<li>Did something with JSON</li>
  				</ul>
  			<h3>5/4/19</h3>
  				<ul>
  					<li>Created sign up system</li>
  					<li>Added delete function to notes package</li>
  				</ul>
    		<h3>5/3/19</h3>
      		<ul>
        		<li>Reorganized file system</li>
        		<li>Added better security to note module, now you can't view notes you don't own</li>
        		<li>Started making a way to delete notes (WIP)</li>
        		<li>Moved the old website to <a href="oldsite">Here...</a></li>
      		</ul>
    		<h3>5/2/19</h3>
      		<ul>
        		<li>Put navbar back to original kinda</li>
        		<li>
          		Started implementing notifications Finished: 
          		<ul>
            		<li>Login</li>
            		<li>Change Password</li>
            		<li>Create Note</li>
          		</ul>
        		</li>
      		</ul>
    		<h3>5/1/19</h3>
      		<ul>
        		<li>Fixed the login log systems</li>
        		<li>Updated reset password to new config file.</li>
        		<li>Tried fixing the Navbar spacing (didn't) :(</li>
      		</ul>
    		<h3>4/30/19</h3>
      		<ul>
        		<li>Updated the way linking to CSS works</li>
        		<li>Updated the Welcome page to the new format</li>
      		</ul>
    		<h3>4/29/19</h3>
    		<ul>
      		<li>Updated create note package</li>
      		<li>Started making plans for importable modules</li>
    		</ul>
		
		
		
	</div>
	
	<?php include $jstags; ?>
</body>
</html>