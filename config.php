<?php
// All paths for html includes
$path = $_SERVER['DOCUMENT_ROOT'];
$headtags = $path . "/assets/headtags.php";
$navbar = $path . "/assets/navbar.php";
$mainnavbar = $path . "/assets/mainnavbar.php";
$jstags = $path . "/assets/jstags.php";
include $path . "/assets/php/functions.php";


// Bring in Json
$strJsonFileContents = file_get_contents($path. "/config.json");
$config = json_decode($strJsonFileContents, true);


// Start Session
session_start();


// Set website title
$website_title = $config['websitetitle'];
$website_url = $config['websiteurl'];

$server = decryptString($config['dbserver'], 990);
$dbuser = decryptString($config['dbusername'], 73198256);
$dbpass = decryptString($config['dbpassword'], "how secure could i possibly make this, if i make it any more secure it will be impossible");
$dbname = decryptString($config['dbname'], 65725);

// Try to connect to DB
$link = mysqli_connect($server, $dbuser, $dbpass, $dbname);
// Check connection to DB
if($link === false){
    //header("location: setup?noti=nolink");
}

$sql = "SELECT * FROM settings WHERE id = '0'"	;
$result = $link->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$allowsignups = $row["allowsignups"];
	}
}
if ( $require_loggedin == "yes" ) {
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: $website_url/login");
    exit;
	}
}
?>