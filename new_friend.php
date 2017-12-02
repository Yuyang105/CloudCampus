<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?> 
<?php
	$friend_id = 1;
	while(true){
    if($_POST["$friend_id"]) { 
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        if (!$con) {
        	die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("CloudCampusOnAWS"); 
		$sql = "INSERT INTO Friends (Email,F_ID) VALUES ('$_SESSION[user]','$friend_id')";
		$query=mysql_query($sql,$con);
		$sql = "SELECT Student_Id FROM Students WHERE Email = '$_SESSION[user]'";
		$query=mysql_query($sql,$con);
		$result1=mysql_fetch_array($query);	
		$sql = "SELECT Email FROM Students WHERE Student_Id = '$friend_id'";
		$query=mysql_query($sql,$con);
		$result=mysql_fetch_array($query);	
		$sql = "INSERT INTO Friends (Email,F_ID) VALUES ('$result[0]','$result1[0]')";
		$query=mysql_query($sql,$con);
		$sql= "DELETE FROM FriendRequest WHERE Req_Id = '$friend_id'";
		$query=mysql_query($sql,$con);
		echo "<script>window.location='request.php';</script>";
		exit;
	}
	$friend_id++;	
	}
	
?>