<?php
$con = mysql_connect("localhost","root","3350");
if (!$con) {
	die('Could not connect: ' . mysql_error());
}

if (mysql_query("DROP DATABASE CloudCampusOnAWS", $con)) {
	echo "Database deleted";
}
else {
	echo "Error deleting database: " . mysql_error();
}
mysql_close($con);
?>
