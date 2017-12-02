<?php
	$plan_id = 1;
	while(true){
    if($_POST["$plan_id"]) { 
     $update_time=date('Y-m-d H:i:s');
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        			if (!$con) {
        			die('Could not connect: ' . mysql_error());
        			}
        mysql_select_db("CloudCampusOnAWS"); 
		$sql= "UPDATE PersonalPlans SET Progress=Progress+Progrss_once, Complete=Complete+1, Update_Time=' $update_time' WHERE Plans_Id = '$plan_id'";
		$query=mysql_query($sql,$con);
		echo "<script>window.location='plan.php';</script>";
		exit;
	}
	$plan_id++;	
	}
	
?>