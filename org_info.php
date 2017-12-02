<?php require("include/global.php"); ?>
<?php require("login_check.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>User information</title>
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
		<link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">
		<style type="text/css">
			a:link,
			a:visited{ text-decoration:none; color: 3C5A96}
			a:hover{ text-decoration:underline; color: 3C5A96}
			img,a img{    
				border:0;    
				margin:0;    
				padding:0;    
				max-width:360px;    
				width: expression(this.width > 360 && this.width > this.height ? 360px : 'auto';);    
			
				height:auto;
			}
			/*returnTop*/  
			p#back-to-top{  
    			position:fixed;  
    			display:none;  
   	 			bottom:50px;  
    			right:80px; 
			}  
			p#back-to-top a{  
    			text-align:center;  
    			text-decoration:none;  
    			color:#d1d1d1;  
    			display:block;  
    			width:64px;  
   				-moz-transition:color 1s;  
    			-webkit-transition:color 1s;  
    			-o-transition:color 1s;  
			}  
			p#back-to-top a:hover{  
    			color:#979797;  
			}  
			p#back-to-top a span{  
    			background:transparent url(images/top.png) no-repeat -25px -290px;  
    			border-radius:6px;  
    			display:block;  
    			height:64px;  
    			width:56px;  
    			margin-bottom:5px;  
    			/*Ê¹ÓÃCSS3ÖÐµÄtransitionÊôÐÔ¸ø<span>±êÇ©±³¾°ÑÕÉ«Ìí¼Ó½¥±äÐ§¹û*/  
    			-moz-transition:background 1s;  
    			-webkit-transition:background 1s;  
    			-o-transition:background 1s;  
			}  
			#back-to-top a:hover span{  
    			background:transparent url(images/top.png) no-repeat -25px -290px;  
			}
			*{  
            margin: 0;  
            padding: 0;  
        }  
        .cent{
        	border: 1px #CCCCCC solid;
        	width:98%;
        	padding:10px;
        }  
        .cs{  
            top:0px;
            opacity: 0;  
            display: block;
            float:right;  
            font-size: 12px;  
            transition: 0.3s;  
            -webkit-transition: .5s;  
            -moz-transition: .5s;  
        }  
        .cent:hover .cs{  
            color: #656e73;  
            opacity: 1; 
        }   
        .yuyang{
        	border: 0px;
        	width:100%;
        }  
        .yu{  
            bottom:0px;   
            opacity: 0;  
            display: block;
            float:right;  
            font-size: 12px;  
            transition: 0.3s;  
            -webkit-transition: .5s;  
            -moz-transition: .5s;  
        }  
        .yuyang:hover .yu{  
            color: #656e73;  
            opacity: 1; 
        }   
		</style>
</head>

<body class="theme-blue">
    <div class="navbar navbar-default" role="navigation" style="position:fixed; width:100%; height:50px; z-index:1; overflow-x:visible;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="org_index.php"><span class="navbar-brand"><span class="fa fa-fw fa-cloud"></span> Cloud Campus</span></a></div>

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
                    <div class="avatar" >
                      <img src="<?php 
                            session_start(); 
                            echo $_SESSION["avatar"]; ?>" style="width:100px;height:100px;"/>
                    </div>
                    <br/>
                    <span><?php
                        session_start();  
                        echo $_SESSION["name"];
                        ?></span>
                  </li>

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
<div style="padding:50px 0px 0px 0px;">    
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


    <div class="content">
        <p id="back-to-top"><a href="#top"><span></span>Back to Top</a></p>  
        <script src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.7.2.min.js"></script>  
        <script>  
            $(function(){  
        //µ±¹ö¶¯ÌõµÄÎ»ÖÃ´¦ÓÚ¾à¶¥²¿100ÏñËØÒÔÏÂÊ±£¬Ìø×ªÁ´½Ó³öÏÖ£¬·ñÔòÏûÊ§  
            $(function () {  
                $(window).scroll(function(){  
                    if ($(window).scrollTop()>100){  
                        $("#back-to-top").fadeIn(1500);  
                    }  
                    else  
                    {  
                        $("#back-to-top").fadeOut(1500);  
                    }  
                });  
  
            //µ±µã»÷Ìø×ªÁ´½Óºó£¬»Øµ½Ò³Ãæ¶¥²¿Î»ÖÃ  
  
                $("#back-to-top").click(function(){  
                    $('body,html').animate({scrollTop:0},1000);  
                    return false;  
                });  
            });  
        });  
        </script> 
        <div class="header">
            <h1 class="page-title">Information</h1>
                <ul class="breadcrumb">
                    <li><a href="org_index.php">Home</a> </li>
                    <li class="active">Information</li>
                 </ul>
        </div>
        
        <?php
$uptypes=array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
);

$max_file_size=2000000;     //上传文件大小限制, 单位BYTE
$destination_folder="avatar/"; //上传文件路径
$watermark=0;      //是否附加水印(1为加水印,其他为不加水印);
$watertype=1;      //水印类型(1为文字,2为图片)
$waterposition=1;     //水印位置(1为左下角,2为右下角,3为左上角,4为右上角,5为居中);
$waterstring="http://www.cloudcampus.com/";  //水印字符串
$waterimg="xplore.gif";    //水印图片
$imgpreview=1;      //是否生成预览图(1为生成,其他为不生成);
$imgpreviewsize=1/2;    //缩略图比例
?>
        

<div style="padding:20px;">
<table width="32%" border="0" cellspacing="0" cellpadding="0">
<tr>
    	<td width="8%">
        <h4>User Account:</h4>
        </td>
        <td width="18%">
        <?php
			session_start();
			echo $_SESSION["user"];
		?>
        </td>
<tr>
</table>
</br>
<table width="20%" border="0" cellspacing="0" cellpadding="0">
	<tr>
    	<td width="12%">
        <h4>User Name:</h4>
        </td>
		<td width="12%">
			<?php
	        	session_start(); 
            	echo $_SESSION["name"];
        	?>
      	</td>  
      <tr>
</table>
</br>

<table width="20%" border="0" cellspacing="0" cellpadding="0">
	<tr>
    	<td width="12%">
        <h4>Introduction: </h4>
        </td>
		<td width="12%">
			<?php
	        	session_start(); 
            	echo $_SESSION["introduction"];
        	?>
      	</td>  
      <tr>
</table>
</br>

<h4>Avatar:</h4>	
<?php
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        if (!$con) {
        	die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("CloudCampusOnAWS"); 
		$sql="SELECT * FROM Organizations WHERE Email='$_SESSION[user]'";
		 		$query=mysql_query($sql,$con); 						// Ö´ÐÐSQLÖ÷¾ä
		while($rows=mysql_fetch_array($query)){	
	?>

<form enctype="multipart/form-data" method="post" name="upform">
  	
    <div >
  <table>
  			<tr>
    			<th padding="10px" width="50" height="50" rowspan="2" align="center" bgcolor="#FFFFFF"><img src="<?php echo $rows["Avatar"]; ?>" width="100%" height="100%"/></th></tr>
                </table>
              </br>
              
  <div align="left"><input type="file" name="select"><?php } ?></div>
  <br/>
  <div align="left"><input type="submit" name="submit" class="btn btn-primary" value="Upload"><br/></div>
  </br>
  File extensions allowed:<?=implode(', ',$uptypes)?>
  </div>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (!is_uploaded_file($_FILES["select"][tmp_name]))
    //是否存在文件
    {
         echo "Image doesn't exsit!";
         exit;
    }

    $file = $_FILES["select"];
    if($max_file_size < $file["size"])
    //检查文件大小
    {
        echo "Sorry, the upload size is too large!";
        exit;
    }

    if(!in_array($file["type"], $uptypes))
    //检查文件类型
    {
        echo "Not allowed file extention!".$file["type"];
        exit;
    }

    if(!file_exists($destination_folder))
    {
        mkdir($destination_folder);
    }

    $filename=$file["tmp_name"];
    $image_size = getimagesize($filename);
    $pinfo=pathinfo($file["name"]);
    $ftype=$pinfo['extension'];
    $destination = $destination_folder.time().".".$ftype;
    if (file_exists($destination) && $overwrite != true)
    {
        echo "Same name image is already exsit";
        exit;
    }

    if(!move_uploaded_file ($filename, $destination))
    {
        echo "Moving file error";
        exit;
    }

    $pinfo=pathinfo($destination);
    $fname=$pinfo[basename];
    echo " <font color=red>You avatar has been uploaded successfully!</font><br>File name:  <font color=blue>".$destination_folder.$fname."</font><br>";
    echo " Weight:".$image_size[0];
    echo " Height:".$image_size[1];
    echo "<br> Size:".$file["size"]." bytes";

    if($watermark==1)
    {
        $iinfo=getimagesize($destination,$iinfo);
        $nimage=imagecreatetruecolor($image_size[0],$image_size[1]);
        $white=imagecolorallocate($nimage,255,255,255);
        $black=imagecolorallocate($nimage,0,0,0);
        $red=imagecolorallocate($nimage,255,0,0);
        imagefill($nimage,0,0,$white);
        switch ($iinfo[2])
        {
            case 1:
            $simage =imagecreatefromgif($destination);
            break;
            case 2:
            $simage =imagecreatefromjpeg($destination);
            break;
            case 3:
            $simage =imagecreatefrompng($destination);
            break;
            case 6:
            $simage =imagecreatefromwbmp($destination);
            break;
            default:
            die("Not allowed file extention");
            exit;
        }

        imagecopy($nimage,$simage,0,0,0,0,$image_size[0],$image_size[1]);
        imagefilledrectangle($nimage,1,$image_size[1]-15,80,$image_size[1],$white);

        switch($watertype)
        {
            case 1:   //加水印字符串
            imagestring($nimage,2,3,$image_size[1]-15,$waterstring,$black);
            break;
            case 2:   //加水印图片
            $simage1 =imagecreatefromgif("cloudcampus.gif");
            imagecopy($nimage,$simage1,0,0,0,0,85,15);
            imagedestroy($simage1);
            break;
        }

        switch ($iinfo[2])
        {
            case 1:
            //imagegif($nimage, $destination);
            imagejpeg($nimage, $destination);
            break;
            case 2:
            imagejpeg($nimage, $destination);
            break;
            case 3:
            imagepng($nimage, $destination);
            break;
            case 6:
            imagewbmp($nimage, $destination);
            //imagejpeg($nimage, $destination);
            break;
        }

        //覆盖原上传文件
        imagedestroy($nimage);
        imagedestroy($simage);
    }

    if($imgpreview==1)
    {
    echo "<br>Image preview: <br>";
    echo "<img src=\"".$destination."\" width=".($image_size[0]*$imgpreviewsize)." height=".($image_size[1]*$imgpreviewsize);
    echo " alt=\"Image preview:\rFile name:".$destination."\rUpload time:\">";
    }
    $_SESSION["avatar"] = $destination;
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
	//选择库
    mysql_select_db("CloudCampusOnAWS",$con);
        
    $sql = "UPDATE Organizations SET Avatar='$destination' WHERE Email='$_SESSION[user]'";
    
    //是否写入到数据库
    $result = mysql_query($sql, $con);
    
    
}
?>
</div>
</br></br></br>
<table width="20%" border="0" cellspacing="0" cellpadding="0">
<tr>
    	<td width="10%">
			<input class="btn btn-primary" type="button" name="edit" value="Edit" onClick ="location.href='edit_org_info.php'"/>
        </td>
        <td width="10%">
			<input class="btn btn-danger" type="button" name="back" value="Back" onClick ="javascript:history.go(-1);"/>
        </td>
<tr>
</table>
	<footer>
                <hr>
                 &copy; 2017 Copyright. TCSS545 Group Project  
      			<a href="brianstorm_info.html">@Cloud Campus</a>   
                Contact us: CloudCampus@outlook.com
            </footer>
</div>
</body>
</html>