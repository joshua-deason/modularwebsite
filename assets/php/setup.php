<?php
// All paths for html includes
$path = $_SERVER['DOCUMENT_ROOT'];
$headtags = $path . "/assets/headtags.php";
$navbar = $path . "/assets/navbar.php";
$jstags = $path . "/assets/jstags.php";
include $path . "/assets/php/functions.php";
// Bring in Json
$strJsonFileContents = file_get_contents("$path/config.json");
$config = json_decode($strJsonFileContents, true);
$website_title = $config['websitetitle'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$dbserver = $_POST["server"];
	$dbusername = $_POST["username"];
	$dbpassword = $_POST["password"];
	$dbname = $_POST["name"];
	$adminuser = $_POST["adminuser"];
	$adminpass = $_POST["adminpass"];
	$websitetitle = $_POST["websitetitle"];
	$websiteurl = $_POST["websiteurl"];
	
	// Encrypt inportant stuff
	$dbserver = encryptString( $dbserver, 990);
	$dbusername = encryptString( $dbusername, 73198256);
	$dbpassword = encryptString( $dbpassword, "how secure could i possibly make this, if i make it any more secure it will be impossible" );
	$dbname = encryptString( $dbname, 65725);
	
	
	
	
	
	// Save all of the user input into a nice pretty json
	$array = array( 'dbserver'       => $dbserver, 
									'dbusername'     => $dbusername,
									'dbpassword'     => $dbpassword, 
									'dbname'         => $dbname, 
									'websitetitle'   => $websitetitle,
									'websiteurl'     => $websiteurl, 
									'configfinished' => 1);
	$fp = fopen('config.json', 'w');
	fwrite($fp, json_encode($array, JSON_PRETTY_PRINT));   //here it will print the array pretty
	fclose($fp);
	
}
?>