<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?>
<?php
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("CloudCampusOnAWS"); 
    $sql="DELETE FROM FriendNews";
    $query=mysql_query($sql,$con); 
    $sql="INSERT INTO FriendNews SELECT * FROM PersonalNews WHERE Email = '$_SESSION[user]'";
    $query=mysql_query($sql,$con); 
    $sql="SELECT * FROM Friends WHERE Email = '$_SESSION[user]'";
    $query1=mysql_query($sql,$con);                      //Ö´ÐÐSQLÓï¾ä
    while($friend = mysql_fetch_array($query1)){
   		$sql_f="SELECT Email FROM Students WHERE Student_Id='$friend[F_ID]'";
    	$query_f=mysql_query($sql_f,$con);
    	$rows_friend=mysql_fetch_array($query_f);
    	$mail = $rows_friend[0];
    	$sql="INSERT INTO FriendNews SELECT * FROM PersonalNews WHERE Email = '$mail'";
    	$query=mysql_query($sql,$con); 
    }
?>