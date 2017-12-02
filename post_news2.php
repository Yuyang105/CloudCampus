<?php require_once("login_check.php"); ?>

<!DOCTYPE HTML> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html" />
	<title>CloudCampus News Share</title>
	<style type="text/css">
	body
	{
     font-size: 9pt;
	}
</style>
</head>
<body> 


<?php
	// define variables
	$content = "";
	$poster = $_SESSION["user"];
	$uptypes=array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
	);
	$max_file_size=2000000;
	$destination_folder="uploading/";
	$imgpreview=0;      //是否生成预览图(1为生成,其他为不生成);
	$imgpreviewsize=1/2;    //缩略图比例
	$destination;
	
	if($_POST["Submit"]) {
		// is there a upload photo?
		if (!empty($_FILES['select']['tmp_name'])) {
			
			//是否存在文件
			if (!is_uploaded_file($_FILES["select"][tmp_name])) {
         		echo "Image doesn't exsit!";
         		exit;
    		}
    	
    		$file = $_FILES["select"];
    	
    		//检查文件大小
    		if($max_file_size < $file["size"]) {
       			echo "Sorry, the upload size is too large!";
        		exit;
    		}
		
			//检查文件类型
    		if(!in_array($file["type"], $uptypes)) {
        		echo "Not allowed file extention!".$file["type"];
       			exit;
    		}

    		if(!file_exists($destination_folder)) {
        		mkdir($destination_folder);
    		}
    	    	$filename=$file["tmp_name"];
    	
    		$image_size = getimagesize($filename);
    		$pinfo=pathinfo($file["name"]);
    		$ftype=$pinfo['extension'];
    		$destination = $destination_folder.time().".".$ftype;
    	
    		if (file_exists($destination) && $overwrite != true) {
        		echo "Same name image is already exsit";
        		exit;
    		}

    		if(!move_uploaded_file ($filename, $destination)) {
        		echo "Moving file error";
        		exit;
    		}

    		$pinfo=pathinfo($destination);
    		$fname=$pinfo[basename];
    	
    		if($imgpreview==1) {
    			echo "<br>Image preview: <br>";
    			echo "<img src=\"".$destination."\" width=".($image_size[0]*$imgpreviewsize)." height=".($image_size[1]*$imgpreviewsize);
    		}
			$content=str_replace("'", "\'", $_POST["content"]);
			$time=date('Y-m-d H:i:s');
		
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        	if (!$con) {
            	die('Could not connect: ' . mysql_error());
       	 	}
       		mysql_select_db("CloudCampusOnAWS");  //选择数据库  
		
			$sql="INSERT INTO PersonalNews (Email, News, Time, Photo) VALUES ('$poster', '$content','$time', '$destination')";
			mysql_query($sql, $con);
			echo "<script>window.location='news.php';</script>";
		}
		else {
			$content=str_replace("'", "\'", $_POST["content"]);
			$time=date('Y-m-d H:i:s');
		
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        	if (!$con) {
            	die('Could not connect: ' . mysql_error());
       	 	}
       		mysql_select_db("CloudCampusOnAWS");  //选择数据库  
		
			$sql="INSERT INTO PersonalNews (Email, News, Time, Photo) VALUES ('$poster', '$content','$time', '$destination')";
			mysql_query($sql, $con);
			echo "<script>window.location='news.php';</script>";
		}
	}
	
?>

<h2>CloudCampus News Share</h2>
<form enctype="multipart/form-data" method="post" action="" onSubmit="return check()" class="body">
	Add photo:
  	<input type="file" name="select">
  	<br/><br/>
	<textarea name="content" rows="5" cols="40" placeholder="Say something..."></textarea>
	<br><br>
	<td colspan="3" align="center" bgcolor="#FFFFFF">
		<input type="submit" name="Submit" value="Submit" />
    	<input type="reset" name="Reset" value="Reset" />
    	<input type="button" name="Cancel" value="Cancel" onClick ="location.href='news.php'"/>
    </td>
</form>
</body>
</html>

