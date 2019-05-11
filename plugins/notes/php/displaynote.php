<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {
	$content = $title = $id = "";
	
	$id = $_GET["id"];
	$sql = "SELECT * FROM notes WHERE id = '$id'";
	$result = $link->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$content = $row["content"];
			$title = $row["title"];
			$owner = $row["owner"];
			
			$nonexistnotificationstat = 0;
		}
	}
}
?>