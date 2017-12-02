<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?>           	
<?php 
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("CloudCampusOnAWS");
	$id = $_SESSION["id"];
	$sql="SELECT Email FROM Students WHERE Student_Id='$id'";
	$query=mysql_query($sql,$con);
	$result=mysql_fetch_array($query);
	$mail = $result[0];
	$sql="SELECT Student_Id FROM Students WHERE Email='$_SESSION[user]'";
	$query=mysql_query($sql,$con);
	$result=mysql_fetch_array($query);
	$id1 = $result[0];
	if($id !=$id1){
	$sql="SELECT * FROM FriendRequest WHERE Email='$mail'";
	$query1=mysql_query($sql,$con);
	while($row=mysql_fetch_array($query1)){
		//echo "aaaa";
		if($id1== $row["Req_ID"]){
			//echo "cccc";
			break;
		}
	}
	
	$sql="SELECT * FROM Friends WHERE Email='$_SESSION[user]'";
	$query=mysql_query($sql,$con); 
	
	while($rows=mysql_fetch_array($query)){
		//echo "bbbb";
		if($id== $rows["F_ID"]){
			break;
		}
	}
	if($id!= $rows["F_ID"]&&$id1!= $row["Req_ID"]){
		$sql = "SELECT Email FROM Students WHERE Student_Id = '$id'";
		$query=mysql_query($sql,$con); 
		$result = mysql_fetch_array($query);
		$sql = "SELECT Student_Id FROM Students WHERE Email = '$_SESSION[user]'";
		$query=mysql_query($sql,$con); 
		$result1 = mysql_fetch_array($query);
		$sql = "INSERT INTO FriendRequest (Email,Req_ID) VALUES ('$result[0]','$result1[0]')";
		$query=mysql_query($sql,$con);
	}
echo "<script>window.position = page.php;</script>";
}
echo "<script>history.go(-1);</script>";
?>