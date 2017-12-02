<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?>
<?php
	$announcement_id = $_GET['announcement'];
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
    mysql_select_db("CloudCampusOnAWS"); 
	$sql="DELETE FROM Annoucements WHERE Announcement_Id = '$announcement_id'";
	$query=mysql_query($sql,$con);
	echo "<script>window.location='annoucements.php';</script>";
?>