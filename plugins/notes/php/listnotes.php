<?php 
$owner = $_SESSION["id"];
$result = mysqli_query($link,"SELECT * FROM notes WHERE owner = '$owner'");

echo "<table border='1'>
<tr>
<th>Title</th>
<th>Last Updated</th>
<th>Edit Note</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['last_updated'] . "</td>";
echo "<td><a href=displaynote?id=" . $row['id'] . ">View/ Edit note</a>"; 
echo "</tr>";
	
}
echo "</table>";

?>