<?php 
// This is the message displayed when the note is created
$success_message = "<div class='alert alert-info alert-dismissible fade show' role='alert'>
	<span class='alert-inner--text'><strong>Success!</strong> Note Created Successfully</span>
  <button type='button'class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
// This is the error message, although i hope it isn't needed
$error_message = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <span class='alert-inner--text'><strong>Error</strong> Note Not Created</span>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
    </button>
</div>";





if($_SERVER["REQUEST_METHOD"] == "POST") {
	$content = process_text($_POST["content"]);
	$title = process_text($_POST["title"]);
	$owner = $_SESSION["id"];
	$updated = 1;
	
	$sql = "INSERT INTO notes (owner, title, content) VALUES ('$owner', '$title', '$content')";
	if ($link->query($sql) === TRUE) {
    $notification = $success_message;
	} else {
		$notification = $error_message;
    $error = "Error: " . $sql . " " . $link->error . "\n";
    log_item( "error", $error );
	}
}
?>
