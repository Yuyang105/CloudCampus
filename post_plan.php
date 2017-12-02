<?php require_once("login_check.php"); ?>

<!DOCTYPE HTML> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html" />
	<title>CloudCampus Plan Share</title>
	    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<style type="text/css">
	body
	{
     font-size: 9pt;
	}
	.error {color: #FF0000;}
    </style>

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
<body class="theme-blue"> 
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
<div style="position:fixed; width:100%;height:50px; z-index:1; overflow-x:visible;">
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="personal_index.php"><span class="navbar-brand"><span class="fa fa-fw fa-cloud"></span> Cloud Campus</span></a></div>

  <div class="navbar-collapse collapse" >
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

               <li class="with-image">
                    <div class="avatar" > <a href="update_personal_info.php"><img src="<?php 
                            session_start(); 
                            echo $_SESSION["avatar"]; ?>" width="100" height="100"/></a>
                    </div>
                    <br/>
                    <span><?php
                        session_start();  
                        echo $_SESSION["name"];
                        ?></span>
                  </li>

               <li><a href="user_info.php">My account</a></li>
               <li class="divider"></li>
                <li class="dropdown-header">Admin Panel</li>
                <li><a href="search.php">Search People</a></li>
                <li><a href="personal_page.php">Personal Page</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="index.php?logout=true" target="_parent">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
 
   </div> 
 <div style= "padding:50px 0px 0px 0px;">    
<div class="sidebar-nav" style="height:100%;">
    
    <ul id="navigation">
    <li><a href="#" data-target=".cc-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-home"></i> CloudCampus<i class="fa fa-collapse"></i></a></li>
<li>   <ul class="cc-menu nav nav-list collapse in">
            <li><a href="news.php" target="rightFrame"><span class="fa fa-caret-right"></span> Friends' News</a></li>
            <li ><a href="plan.php" target="rightFrame"><span class="fa fa-caret-right"></span> Plans</a></li>
            <li ><a href="person_annouce.php" target="rightFrame"><span class="fa fa-caret-right"></span> Announcements</a></li>
              </ul>
            </li>
            
    <li><a href="#" data-target=".post-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Post<i class="fa fa-collapse"></i></a></li>
  <li>  <ul class="post-menu nav nav-list collapse in">
          <li ><a href="post_news.php" target="rightFrame"><span class="fa fa-caret-right"></span> News</a></li>
          <li ><a href="post_plan.php" target="rightFrame"><span class="fa fa-caret-right"></span> Plans</a></li>
            </ul>
      </li>
          
                          <li><a href="#" data-target=".contact-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-send"></i> Contacts<i class="fa fa-collapse"></i></a></li>
   <li> <ul class="contact-menu nav nav-list collapse in">
          <li ><a href="organization_list.php" target="rightFrame"><span class="fa fa-caret-right"></span> Clubs</a></li>
          <li ><a href="friend_list.php" target="rightFrame"><span class="fa fa-caret-right"></span> Friends</a></li>
            </ul>
      </li>
      
                                <li><a href="#" data-target=".not-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-heart"></i> Notifications<i class="fa fa-collapse"></i></a></li>
    <li><ul class="not-menu nav nav-list collapse in">
          
          <li ><a href="request.php" target="rightFrame"><span class="fa fa-caret-right"></span> Requests</a></li>
            </ul> </li>          

  <li><a href="#" data-target=".acc-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-users"></i> Account<i class="fa fa-collapse"></i></a></li>
<li>   <ul class="acc-menu nav nav-list collapse in">
            <li><a href="user_info.php" target="rightFrame"><span class="fa fa-caret-right"></span> My Account</a></li>
            <li ><a href="search.php" target="rightFrame"><span class="fa fa-caret-right"></span> Search People</a></li>
            <li ><a href="personal_page.php" target="rightFrame"><span class="fa fa-caret-right"></span> Personal Page</a></li>
            <li ><a tabindex="-1" href="index.php?logout=true" target="_parent"><span class="fa fa-caret-right"></span> Log out</a></li>
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
	$title = $_POST["title"];
	$days = $_POST["days"];
	$partion = $_POST["partion"];
	$once = (float)number_format(1/$days*100,1);
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
		
		
		if($days<0){
			echo "<script>alert('Invalid days'); history.go(-1);</script>"; 
		}

		   if($title == "" || $days == "") {
            echo "<script>alert('Please enter Title or Days'); history.go(-1);</script>";  
        }  
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
			$update_time=date('Y-m-d H:i:s');
		
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        	if (!$con) {
            	die('Could not connect: ' . mysql_error());
       	 	}
       		mysql_select_db("CloudCampusOnAWS");  //Ñ¡ÔñÊý¾Ý¿â  
		
			$sql="INSERT INTO PersonalPlans (Email, Content, Time, Photo, Follower_Num, Progress, Title, Progrss_once, Days, Complete, Update_Time) VALUES ('$poster', '$content','$time', '$destination', 0, 0, '$title', '$once', '$days', 0, '$update_time')";
			mysql_query($sql, $con);
			echo "<script>window.location='plan.php';</script>";
		}
		else {
			$content=str_replace("'", "\'", $_POST["content"]);
			$time=date('Y-m-d H:i:s');
			$update_time=date('Y-m-d H:i:s');
		
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        	if (!$con) {
            	die('Could not connect: ' . mysql_error());
       	 	}
       		mysql_select_db("CloudCampusOnAWS");  //Ñ¡ÔñÊý¾Ý¿â  
		
			$sql="INSERT INTO PersonalPlans (Email, Content, Time, Photo, Follower_Num, Progress, Title, Progrss_once, Days, Complete, Update_Time) VALUES ('$poster', '$content','$time', '$destination', 0, 0, '$title', '$once', '$days', 0, '$update_time')";
			mysql_query($sql, $con);
			echo "<script>window.location='plan.php';</script>";
		}
	}
	
?>

    <div class="content">
     <div class="header">
        <h1 class="page-title">CloudCampus Plan Share</h1>
                    <ul class="breadcrumb">
            <li><a href="personal_index.php">Home</a> </li>
            <li class="active">Plan</li>
        </ul>
      </div>
      
	<form enctype="multipart/form-data" method="post" action="" onSubmit="return check()" class="body">
		
 		Title:
    	<input type = "text" name = "title">
    	<span class="error">*</span>
    	<br/><br/>
    	Intended days to finish (days):
    	<input type = "text" name="days" placeholder="e.g: 10">
    	<span class="error">*</span>
    	<br/><br> 
		Add photo:
  		<input type="file" name="select">
  		<br/><br/>
		<textarea name="content" rows="5" cols="40" maxlength="200" placeholder="Say something..."></textarea>
		<br><br>
	<td colspan="3" align="center" bgcolor="#FFFFFF">
		<input type="submit" name="Submit" value="Submit" class="btn btn-primary"/>
    	<input type="reset" name="Reset" value="Reset" class="btn btn-primary"/>
    	<input type="button" name="Cancel" value="Cancel" onClick ="location.href='plan.php'" class="btn btn-primary"/>
    </td>
</form>
			<footer>
                <hr>
                 &copy; 2017 Copyright. TCSS545 Group Project  
      			<a href="brianstorm_info.html">@Cloud Campus</a>   
                Contact us: CloudCampus@outlook.com
            </footer>
</div>
</body>
</html>

