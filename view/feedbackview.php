<?php
require_once("model/db.php");
function display_item($id, $postid, $date, $email, $type, $content, $status) {
	if ($status == 1) {
		echo "<tr class=\"Read\">";
	} else {
		echo "<tr class=\"Unread\">";
	}
	echo "<td><label><input type=\"checkbox\" name=\"select\" value=\"".$postid."\"></label></td>";
	echo "<td>".$id."</td>";
	echo "<td>".$date."</td>";
	echo "<td>".$email."</td>";
	echo "<td><p type=\"".$type."\">".$type."</p></td>";
	echo "<td>".$content."</td>";
	if ($status == 1) {
		echo "<td>Read</td>";
	} else {
		echo "<td>Unread</td>";
	}
	echo "</tr>";
}
?>