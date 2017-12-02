<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?>
<?php
	$plan_id = 1;
	$poster=$_SESSION['user'];
	while(true){
    if($_POST["$plan_id"]) { 

$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        			if (!$con) {
        			die('Could not connect: ' . mysql_error());
        			}
        mysql_select_db("CloudCampusOnAWS"); 
		$sql= "UPDATE PersonalPlans SET Follower_Num = Follower_Num - 1 WHERE Plans_Id = '$plan_id'";
		$query=mysql_query($sql,$con);
		$sql1= "DELETE FROM Follow WHERE Plan_Follow_Id = '$plan_id' ";
		$query1=mysql_query($sql1,$con);
		echo "<script>window.location='plan.php';</script>";
		exit;
	}
	$plan_id++;	
	}
	
?>