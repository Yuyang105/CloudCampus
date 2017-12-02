<?php
	$friend_id = 1;
		while(true){
    	if($_POST["$friend_id"]) { 
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        if (!$con) {
        	die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("CloudCampusOnAWS"); 
		$sql= "DELETE FROM FriendRequest WHERE Req_Id = '$friend_id'";
		$query=mysql_query($sql,$con);
		echo "<script>window.location='request.php';</script>";
		exit;
	}
	$friend_id++;	
	}
?>