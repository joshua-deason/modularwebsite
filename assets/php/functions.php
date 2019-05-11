<?php
$now = date( "H:i m-d-Y" );
// Process text to insert to database
function process_text ( $str ) {
	$str = str_replace("'", "&#39;", $str);
	$str = str_replace('"', '&#34;', $str);
	return $str;
}
// Logs an item to one of the logs 
function log_item ( $type, $log ) {
	if ( $type == "login") {
		$logfile = fopen( $main_url . "logs/loginlogs", "a+" );
	} elseif ( $type == "error" ) {
		$logfile = fopen( $main_url . "logs/errors", "a+");
	} else {
		$logfile = fopen( $main_url . "logs/random", "a+");
	}
	fwrite( $logfile, $log );
	fclose( $logfile );
}
// Create a notification upon request
function createNotification ( $type , $message ) {
	if ( $type == "success" ) {
		$notification = "<div class='alert alert-info alert-dismissible fade show' role='alert'>
	<span class='alert-inner--text'>$message</span>
  <button type='button'class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
	}
	elseif ( $type == "error" ) {
		$notification = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <span class='alert-inner--text'><strong>Error</strong> $message</span>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
    </button>
</div>";
	}
	return $notification;
}

// Encrypts Data
function encryptString ( $string, $pass ) {
	$method = 'aes128';
	$encrypted = openssl_encrypt ($string, $method, $pass);
	return $encrypted;
}
// Decrypts Data
function decryptString ( $string, $pass ) {
	$method = 'aes128';
	$decrypted = openssl_decrypt ( $string, $method, $pass);
	return $decrypted;
}











?>