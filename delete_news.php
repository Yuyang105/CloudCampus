<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?>
<?php
	$news_id = $_GET['news'];
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
    mysql_select_db("CloudCampusOnAWS"); 
	$sql="DELETE FROM PersonalNews WHERE News_Id = '$news_id'";
	$query=mysql_query($sql,$con);
	echo "<script>window.location='news.php';</script>";
?>