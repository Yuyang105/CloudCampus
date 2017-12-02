<!doctype html>
<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?>
<html>
<head>
<meta charset="UTF-8">
<title>Follower List</title>
<style type="text/css">
			a:link,
			a:visited{ text-decoration:none; color: 3C5A96}
			a:hover{ text-decoration:underline; color: 3C5A96}
			img,a img{    
				border:0;    
				margin:0;    
				padding:0;    
				max-width:480px;    
				width: expression(this.width > 480 && this.width > this.height ? 480px : 'auto';);    
				max-height:640px;    
				height: expresion(this.height > 640 ? 640px : 'auto';); 
			}
		</style>
</head>

<body>
<h2 align="center">Follower List</h2>
<?php
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        if (!$con) {
        	die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("CloudCampusOnAWS"); 
		$sql="SELECT * FROM Students WHERE Email='$_SESSION[user]'";
		$query=mysql_query($sql,$con); 						// Ö´ÐÐSQLÖ÷¾ä
					
		while($rows=mysql_fetch_array($query)){
		$sql1="SELECT Avatar, Name FROM Students WHERE Student_Id='$rows[F_ID]'";
		$query1=mysql_query($sql1,$con); 						// Ö´ÐÐSQLÖ÷¾ä
		$rows1=mysql_fetch_array($query1);	
		$var = $rows1[1];
?>
<table>
  	<tr>
    	<th width="50" height="50" rowspan="2" align="center" bgcolor="#FFFFFF"><img src="<?php echo $rows1[0]; ?>" width="100%" height="100%"/></th>
    		<td align="left" bgcolor="#FFFFFF">
    			<a href="<?php echo "friend_page.php?new=".$var?>"><?php echo '<span style="font-weight:bolder;">'.$rows1[1].'</span>'?></a>
    		</td>
	</tr>
</table>
<?php
	}
?>
</body>
</html>