<?php require_once("login_check.php"); ?>

<!DOCTYPE HTML> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html" />
	<title>CloudCampus Annoucement Share</title>


        <link href='http://fonts.useso.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>

        <script src="lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>


    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">

    
</head>
<body class=" theme-blue"> 

<script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="org_index.php"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Cloud Campus</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>
                        <?php
                        session_start();  
                        echo $_SESSION["name"];
                        ?> 
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
               <li><a href="org_info.php">My account</a></li>
               <li class="divider"></li>
                <li class="dropdown-header">Admin Panel</li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="index.php?logout=true" target="_parent">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
    
   
<div class="sidebar-nav" style="height:100%;">
    
    <ul id="navigation">
    <li><a href="#" data-target=".cc-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> CloudCampus<i class="fa fa-collapse"></i></a></li>
<li>   <ul class="cc-menu nav nav-list collapse in">
            
            <li ><a href="annoucements.php" target="rightFrame"><span class="fa fa-caret-right"></span> Announcements</a></li>
              </ul>
            </li>
            
    <li><a href="#" data-target=".post-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Post<i class="fa fa-collapse"></i></a></li>
  <li>  <ul class="post-menu nav nav-list collapse in">
          <li ><a href="post_annouce.php" target="rightFrame"><span class="fa fa-caret-right"></span> Announcements</a></li>
            </ul>
      </li>
      
              <li><a href="#" data-target=".contact-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Contacts<i class="fa fa-collapse"></i></a></li>
   <li> <ul class="contact-menu nav nav-list collapse in">
          <li ><a href="follower.php" target="rightFrame"><span class="fa fa-caret-right"></span> Follower</a></li>
            </ul>
      </li>
          
                     
    </div>




    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>


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
	$imgpreview=0;      //ÊÇ·ñÉú³ÉÔ¤ÀÀÍ¼(1ÎªÉú³É,ÆäËûÎª²»Éú³É);
	$imgpreviewsize=1/2;    //ËõÂÔÍ¼±ÈÀý
	$destination;
	
	if($_POST["Submit"]) {
		// is there a upload photo?
		if (!empty($_FILES['select']['tmp_name'])) {
			
			//ÊÇ·ñ´æÔÚÎÄ¼þ
			if (!is_uploaded_file($_FILES["select"][tmp_name])) {
         		echo "Image doesn't exsit!";
         		exit;
    		}
    	
    		$file = $_FILES["select"];
    	
    		//¼ì²éÎÄ¼þ´óÐ¡
    		if($max_file_size < $file["size"]) {
       			echo "Sorry, the upload size is too large!";
        		exit;
    		}
		
			//¼ì²éÎÄ¼þÀàÐÍ
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
       		mysql_select_db("CloudCampusOnAWS");  //Ñ¡ÔñÊý¾Ý¿â  
		
			$sql="INSERT INTO Annoucements (Email, Content, time, Photo, Follower_Num) VALUES ('$poster', '$content','$time', '$destination', 0)";
			mysql_query($sql, $con);
			echo "<script>window.location='annoucements.php';</script>";
		}
		else {
			$content=str_replace("'", "\'", $_POST["content"]);
			$time=date('Y-m-d H:i:s');
		
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        	if (!$con) {
            	die('Could not connect: ' . mysql_error());
       	 	}
       		mysql_select_db("CloudCampusOnAWS");  //Ñ¡ÔñÊý¾Ý¿â  
		
			$sql="INSERT INTO Annoucements (Email, Content, time, Photo, Follower_Num) VALUES ('$poster', '$content','$time', '$destination', 0)";
			mysql_query($sql, $con);
			echo "<script>window.location='annoucements.php';</script>";
		}
	}
	
?>

<div class="content">
    <div class="header">
    <h1 class="page-title">CloudCampus Announcement Share</h1>
        <ul class="breadcrumb">
            <li><a href="org_index.php">Home</a> </li>
            <li class="active">Announcement</li>
        </ul>
     </div>
        
      <div align="left" style="padding:20px;">
		<form enctype="multipart/form-data" method="post" action="" onSubmit="return check()" class="body">
		<div style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:18px">Add photo:</div>
        <br/>
  			<input type="file" name="select">
  		<br/><br/>
		<textarea name="content" rows="5" cols="50" placeholder="Say something..."></textarea>
		<br><br>
		<td colspan="3" align="center" bgcolor="#FFFFFF">
			<input type="submit" name="Submit" value="Submit" class="btn btn-primary" />
    		<input type="reset" name="Reset" value="Reset" class="btn btn-danger"/>
    		<input type="button" name="Cancel" value="Cancel" class="btn btn-success" onClick ="location.href='annoucements.php'"/>
    	</td>
		</form>
	</div>
<footer>
                <hr>
                 &copy; 2017 Copyright. TCSS545 Group Project  
      			<a href="brianstorm_info.html">@Cloud Campus</a>   
                Contact us: CloudCampus@outlook.com
            </footer>
</div>
</body>
</html>

