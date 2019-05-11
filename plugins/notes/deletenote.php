<?php
$require_loggedin = "yes";
if($_SERVER["REQUEST_METHOD"] == "GET") {
	include '../config.php';
	include $headtags;
	$id = $_GET["id"];
	$sql = "SELECT * FROM notes WHERE id = '$id'";
	$result = $link->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$owner = $row["owner"];
			if ( $owner == $_SESSION['id'] ) {
				$delete = "DELETE FROM notes WHERE id = '$id'";
				if ( $link->query($delete) ) {
					header( "location: listnotes?success=1" );
				} else{
					echo "Error message = ".mysqli_error($link);
				}
			} else {
				$notification = createNotification( "error", "You don't own this note! Go back to <a href=\"displaynote\">Display note page?</a>");
				log_item( "random" , "$username tried to delete note id $id");
			}
		}
	}
}
/*
	if ( $owner == $_SESSION['id'] ) {
		$delete = "DELETE FROM notes WHERE id = '$id";
		if ( $link->query($delete) ) {
				header("location: listnotes?success=1");
		}
	}*/

?>
<div class="content">
	<div style="margin-top: 15;"></span><?php echo $notification; ?></div>
</div>