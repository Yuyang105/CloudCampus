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
		$sql= "UPDATE PersonalPlans SET Follower_Num=Follower_Num+1 WHERE Plans_Id = '$plan_id'";
		$query=mysql_query($sql,$con);
		$sql = "INSERT INTO Follow (Email, Plan_Follow_Id) VALUES ('$poster', '$plan_id')";
		$query1=mysql_query($sql,$con);
		
		$sql_new = "SELECT * FROM PersonalPlans WHERE Plans_Id = '$plan_id'";
		$query_new=mysql_query($sql_new,$con);
		$result=mysql_fetch_array($query_new); 
	
		$content = $result[9];
		$poster = $_SESSION["user"];
		$title = $result[4];
		$days = $result[6];
		$once = (float)number_format(1/$days*100,1);
		$dest = $result[10];
		$time=date('Y-m-d H:i:s');
		$update_time=date('Y-m-d H:i:s');
	
		$sql="INSERT INTO PersonalPlans (Email, Content, Time, Photo, Follower_Num, Progress, Title, Progrss_once, Days, Complete, Update_Time) VALUES ('$poster', '$content','$time', '$dest', 0, 0, '$title', '$once', '$days', 0, '$update_time')";
			mysql_query($sql, $con);
			echo "<script>window.location='plan.php';</script>";
			exit;
		}
	

	$plan_id++;	
	}
	
?>