<?php
//$con = mysql_connect("localhost","root","3350");
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
if (!$con) {
	die('Hi, Could not connect: ' . mysql_error());
}

if (mysql_query("CREATE DATABASE CloudCampusOnAWS", $con)) {
	echo "Database has been created..<br>";
}
else {
	echo "Error creating database: " . mysql_error();
}
mysql_close($con);
?>
