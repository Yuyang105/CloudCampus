<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Plan</title>
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       	<link rel="stylesheet" type="text/css" href="../css/main.css" />
       	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> 
		<script src="js/jquery.circliful.min.js"></script> 
		<style> 
			.circliful { 
    			position: relative;  
			} 
			.circle-text, .circle-info, .circle-text-half, .circle-info-half { 
    			width: 100%; 
    			position: absolute; 
    			text-align: center; 
    			display: inline-block; 
			} 
			.circle-info, .circle-info-half { 
    			color: #999; 
			} 
			.circliful .fa { 
    			margin: -10px 3px 0 3px; 
    			position: relative; 
    			bottom: 4px; 
			} 
			/*returnTop*/  
			p#back-to-top{  
    			position:fixed;  
    			display:none;  
   	 			bottom:20px;  
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
    			/*使用CSS3中的transition属性给<span>标签背景颜色添加渐变效果*/  
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
			a:link,
			a:visited{ text-decoration:none; color: 3C5A96}
			a:hover{ text-decoration:underline; color: 3C5A96}
			img,a img{    
				border:50%;    
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

        <script src="lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>


    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">

	     
	</head>
	
	<?php
  			
  			function tranTime($ytime) { 
    		$rtime = date("m-d H:i",$ytime); 
    		$htime = date("H:i",$ytime); 
     
    		$ytime = time() - $ytime; 
 
    		if ($ytime < 60) { 
       			 $str = 'just now'; 
    		} 
    		else if ($ytime < 120) {
    			$sec = $ytime-60;
    			$str = '1 min '.$sec." sec";
    		}
    		else if ($ytime < 60 * 60) { 
        		$min = floor($ytime/60); 
       			$str = $min.' mins'; 
    		} 
    		else if ($ytime < 2 * 60 * 60) {
    			$min = floor($ytime/60)-60; 
    			$str = "1 hr ".$min." mins";
    		}
    		else if ($ytime < 60 * 60 * 24) { 
        		$h = floor($ytime/(60*60)); 
        		$str = $h.' hrs'; 
    		} 
    		else if ($ytime < 60 * 60 * 24 * 3) { 
        		$d = floor($ytime/(60*60*24)); 
        		if($d==1) 
           			$str = 'yesterday '.$htime; 
        		else 
           			$str = '2 days ago '.$htime; 
    		} 
    		else { 
        		$str = $rtime; 
    		} 
    		return $str; 
			} 
	?>
	
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
    <div class="navbar navbar-default" role="navigation" >
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


	<div class="content">
	<p id="back-to-top"><a href="#top"><span></span>Back to Top</a></p> 
        <script>  
            $(function(){  
        //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失  
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
  
            //当点击跳转链接后，回到页面顶部位置  
  
                $("#back-to-top").click(function(){  
                    $('body,html').animate({scrollTop:0},1000);  
                    return false;  
                });  
            });  
        });  
        </script> 
   	 <div class="header">
        <h1 class="page-title">Plan</h1>
                    <ul class="breadcrumb">
            <li><a href="personal_index.php">Home</a> </li>
            <li class="active">Plan</li>
        </ul>
        <ul align="right"><a href="hot_plan.php" style="font-style:italic;">SHAPE YOUR LIFE with others</a></ul>
     </div>
     
     <div style="width:100%;">
	
	<table width="98%">
		<tr>
			<td align="right">
				<input type="button" name="Post" value="Post Plan" onClick ="location.href='post_plan.php'" class="btn btn-primary"/>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
	</table>
    
 	<?php
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        if (!$con) {
        	die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("CloudCampusOnAWS");  							//Ñ¡ÔñÊý¾Ý¿â  
		$sql="SELECT * FROM PersonalPlans,Students WHERE PersonalPlans.Email=Students.Email ORDER BY Plans_Id desc"; // ²éÑ¯µÄÊý¾Ý¿â±í
		$query=mysql_query($sql,$con); 						//Ö´ÐÐSQLÓï¾ä
 		$nums=mysql_num_rows($query); 						//×ÜÌõÄ¿Êý
 		$each_disNums=10;  									//Ã¿Ò³ÏÔÊ¾µÄÌõÄ¿Êý 
 		$sub_pages=2; 										//µ± $subPage_type Îª 2 Ê±£¬Ã¿´ÎÏÔÊ¾µÄÒ³Êý
 		$pageNums = ceil($nums/$each_disNums); 				//×ÜÒ³Êý
 		$subPage_link="plan.php?&page="; 					//Ã¿¸ö·ÖÒ³µÄÁ´½Ó
 		$subPage_type=1;									//Îª1Ê±,ÏÔÊ¾½á¹û1,Îª2Ê±,ÏÔÊ¾½á¹û2,ÏÔÊ¾·ÖÒ³µÄÀàÐÍ
 		$current_page=$_GET['page']!=""?$_GET['page']:1; 	//µ±Ç°±»Ñ¡ÖÐµÄÒ³
		$currentNums=($current_page-1)*$each_disNums; 		//limit ¼ÆËãÀ´ÓÃ

		$sql_plan="SELECT * FROM PersonalPlans,Students WHERE PersonalPlans.Email=Students.Email ORDER BY Plans_Id desc limit $currentNums,$each_disNums"; //SQLÓï¾ä£¬´Ë´¦·ÖÒ³¼ÆËã
 		$query_plan=mysql_query($sql_plan,$con); 						// Ö´ÐÐSQLÖ÷¾ä
		$b = 2;
		
		while($rows=mysql_fetch_array($query_plan)){	
		$a = "dsb".$rows["Plans_Id"];
		$poster = $_SESSION['user'];
		$plan_id = $rows["Plans_Id"];
		$c ="locate".$a;	
        $up="up".$a;
	?>
    
	<a name="<?php echo $c ?>"></a>
		<div class="cent">
        
        
        <?php if($rows["Email"]==$_SESSION["user"] || $_SESSION["admin"]=="true") { ?>
		<div class="cs">  
        <a href="<?php echo "delete_plan.php?plan=".$plan_id?>">Delete</a>  
    	</div>
    	<?php } ?>  
        
        <table><tr><th height="30"></th></tr></table>
		<table width="95%">
        	<tr>
        		<td style="word-wrap:break-word; padding:5; text-align:center; vertical-align:middle;">
                    Title: <?php echo $rows["Title"]?>
                    <br/>
				</td>
			<tr>
		</table>
        
		<table width="98%" border="0" cellspacing="8" cellpadding="0">
			<tr><th height="10"></th></tr>
			<table>
  			<tr>
    			<th width="60" height="60" rowspan="2" align="center" bgcolor="#FFFFFF" style="word-wrap:break-word; padding:5;"><img src="<?php echo $rows["Avatar"]; ?>" width="60" height="60"/></th>
    			<td align="left" bgcolor="#FFFFFF" style="padding:5px;">
    				<a href="<?php echo "page.php?new=".$rows["Email"]?>"><?php echo '<span style="font-weight:bolder;">'.$rows["Name"].'</span>'?></a>
    			</td>
  			</tr>
  			
  			<?php $mytime = strtotime($rows["Time"]); ?>
  			<tr><td style="padding:5px;"><?php echo'<span style="color:#CCCCCC; font-size:small">'.tranTime($mytime).'</span>' ?></td></tr>
  			<tr><td colspan="2" align="left" valign="top" bgcolor="#FFFFFF">
  					<table style="width:100%; margin=5px" border="0">
  						<tr><td><?php echo $rows["Content"]; ?></td></tr>
  					</table>
  			</td></tr>
  			<table>
            
  			<?php if ($rows["Photo"] != null) { ?>
  				<table><tr>
  					<th align="center" bgcolor="#FFFFFF"><img src="<?php echo $rows["Photo"]; ?>" width="100%" height="100%" style="border:0; margin:0;padding:0;max-width:480px;    width: expression(this.width > 480 && this.width > this.height ? 480px : 'auto';);height:auto;"/></th>
  				</tr></table>
  			<?php } ?>
         </table>
         
      
        	<?php if($rows["Complete"] == $rows["Days"]){// complete all with float number problem
              		$rows["Progress"]=100;
			}?>
        
         
        
       	<table><tr><th height="30"></th></tr></table>
       
		<div id="<?php echo $rows["Plans_Id"]; ?>" data-dimension="250" data-text="<?php echo $rows["Progress"]; ?>%" data-info="Plan Progress"  
		data-width="30" data-fontsize="38" data-percent="<?php echo $rows["Progress"]; ?>" data-fgcolor="#61a9dc"  
		data-bgcolor="#eee" data-fill="#ddd" style="margin:0px auto;";></div> 


       <div style="margin:10px;">
        <?php 
		 if($poster == $rows["Email"] && $rows["Progress"]<100){  // Only poster can complete and Continue complete plan

      		if($_POST["$up"]) { 
     		$update_time=date('Y-m-d H:i:s');
			$content1=str_replace("'", "\'", $_POST["content1"]);
			$time=date('Y-m-d H:i:s');
			$sql_up="INSERT INTO PlanUpdate (Plans_Id, Time, Content) VALUES ('$plan_id', '$update_time','$content1')";
			mysql_query($sql_up, $con);
	
		$sql_u= "UPDATE PersonalPlans SET Progress=Progress+Progrss_once, Complete=Complete+1, Update_Time=' $update_time' WHERE Plans_Id = '$plan_id'";
		mysql_query($sql_u,$con);
				$jump = "#locatedsb".$plan_id;
		?>
	
		
			<script language='javascript'>document.location = '<?php echo $jump; ?>'</script>
		<?php }

        $Avatar = $_SESSION["avatar"]; ?>
		
		<form enctype="multipart/form-data" method="post" onSubmit="return check()" class="body">
			<table style="width:95%; margin:10px;">
			<tr>
    		<td width="55" height="55" style="padding:5px;"><img src="<?php echo $Avatar; ?>" width="100%" height="100%"/></td>
    		<td width="65%" style="padding:5px;"><textarea style="resize:none; word-break:break-all; font-size:small; width:100%;" name="content1" rows="2" placeholder="Write something..." maxlength="300" onchange="this.value=this.value.substring(0, 300)" onkeydown="this.value=this.value.substring(0, 300)" onkeyup="this.value=this.value.substring(0, 300)" ></textarea></td>
    		<td align="left"  style="padding:5px;"><input type="submit" name="<?php echo $up;?>" align="left" value="Complete once" class="btn btn-primary"/></td>
    		</tr>
    		</table>
		</form>
		
	
        
        <?php
        
		$sql_update="SELECT * FROM PlanUpdate WHERE Plans_Id='$plan_id' order by PlanUpdate_Id";
 		$query_update=mysql_query($sql_update,$con); 						// 执行SQL主句
 		
		while($rows_update=mysql_fetch_array($query_update)){	
			$plan=$rows_update["Plans_Id"];
			$email=$_SESSION['user'];
			
			$s="SELECT Avatar, Name FROM Students WHERE Email='$email'"; //SQL语句，此处分页计算
 			$q=mysql_query($s,$con);
 			$r=mysql_fetch_array($q);

			$ss="SELECT Content, Time FROM PlanUpdate WHERE Plans_Id='$plan'"; //SQL语句，此处分页计算
 			$qq=mysql_query($ss,$con);
 			$rr=mysql_fetch_array($qq);
		?>
		
		<div style="width:100%; margin:10px;" class="yuyang">
    	 
		<table width="95%">
    	<tr>
            <th style="padding:5; width:55; height:55; overflow:hidden" valign="top" rowspan="2"><img src="<?php echo $r["Avatar"]; ?>" width="45" height="45"/></th>
    		<td style="word-wrap:break-word; padding:5;"><a href="<?php echo "page.php?new=".$email?>"><?php echo '<span style="font-weight:bolder; font-size:small;">'.$r["Name"].'</span>'?></a></td>
    		<td align="left" style="word-wrap:break-word; padding:5;"><?php echo '<span style="font-size:small;">&nbsp;'.$rows_update["Content"].'</span>' ;?></td>
            <?php $mytime = strtotime($rows_update["Time"]); ?>
            <td align="right" style="word-wrap:break-word; padding:5;"><?php echo '<span style="color:#CCCCCC; font-size:small">'.tranTime($mytime).'</span>'?></td>
    		<td>
    			<?php if($rows["Email"]==$_SESSION["user"] || $_SESSION["admin"] =="true") { ?>
					<div class="yu">  
        				<a href="<?php echo "delete_update.php?new=".$rows_update["PlanUpdate_Id"]?>">Delete</a>  
    				</div>
    			<?php } ?> 
    		</td>
    	</tr>
    	</table>
    	</div>
	
	<?php }
		 }?>
	</div>
 
		
		

        <div style="margin:10px;">
        <?php 
		$day1=$rows["Time"];
		$day2=$rows["Update_Time"];
		$d1 = strtotime($day1);
		$d2 = strtotime($day2);
		$Days = round(($d2 - $d1) / 86400);
		if($rows["Progress"]==100){ //Finished plan?>  
             Finished! <br/>
             Intend days: <?php echo $rows["Days"]?>  <br/>
             Actual days: <?php echo (int)$Days?>
             
         <?php $sql_update="SELECT * FROM PlanUpdate WHERE Plans_Id='$plan_id' order by PlanUpdate_Id";
 		$query_update=mysql_query($sql_update,$con); 						// 执行SQL主句
 		
		while($rows_update=mysql_fetch_array($query_update)){	
			$plan=$rows_update["Plans_Id"];
			$email=$_SESSION['user'];
			
			$s="SELECT Avatar, Name FROM Students WHERE Email='$email'"; //SQL语句，此处分页计算
 			$q=mysql_query($s,$con);
 			$r=mysql_fetch_array($q);
	
			$ss="SELECT Content, Time FROM PlanUpdate WHERE Plans_Id='$plan'"; //SQL语句，此处分页计算
 			$qq=mysql_query($ss,$con);
 			$rr=mysql_fetch_array($qq);
		
			
		?>
		
		<div style="width:100%; margin:10px;" class="yuyang">
    	 
		<table width="95%">
    	<tr>
            <th style="padding:5; width:55; height:55; overflow:hidden" valign="top" rowspan="2"><img src="<?php echo $r["Avatar"]; ?>" width="45" height="45"/></th>
    		<td style="word-wrap:break-word; padding:5;"><a href="<?php echo "page.php?new=".$email?>"><?php echo '<span style="font-weight:bolder; font-size:small;">'.$r["Name"].'</span>'?></a></td>
    		<td colspan="2" style="word-wrap:break-word; padding:5;"><?php echo '<span style="font-size:small;">'.$rows_update["Content"].'</span>' ;?></td>
            <?php $mytime = strtotime($rows_update["Time"]); ?>
            <td colspan="2" style="word-wrap:break-word; padding:5;"><?php echo '<span style="color:#CCCCCC; font-size:small">'.tranTime($mytime).'</span>'?></td>
    		<td>
    			<?php if($rows["Email"]==$_SESSION["user"] || $_SESSION["admin"] =="true") { ?>
					<div class="yu">  
        				<a href="<?php echo "delete_update.php?new=".$rows_update["PlanUpdate_Id"]?>">Delete</a>  
    				</div>
    			<?php } ?> 
    		</td>
    	</tr>
    	</table>
    	</div>
	
	<?php } 
			}?>
	</div>
        
     
        
        <table><tr><th height="30"></th></tr></table>
		<table width="95%">
        	<tr>
        		<td align="center">
                 Follower: <?php echo $rows["Follower_Num"]?>
                    <br/>
                    
                    
                    <?php   //SHOW follow bottun or not 
 					$sql_follow = "SELECT Plan_Follow_Id FROM Follow WHERE Email = '$_SESSION[user]'";  
            		$result_a = mysql_query($sql_follow, $con); 
				
            		while($t_result = mysql_fetch_array($result_a)){
            		$plan_follow_id=$t_result[0];
					if($plan_follow_id == $rows["Plans_Id"]){
							break;
						}
					}?>
					
                    
                     <?php
					if($poster != $rows["Email"] && $plan_follow_id != $rows["Plans_Id"]){ // Not poster user can follow and only follow once?> 
                	<form method="post" action="plan_check.php">
        			<input type="submit" name="<?php echo $rows["Plans_Id"]; ?>" value="Follow" class="btn btn-primary"/>
                    </form>
                    
                    <?php } else if($poster != $rows["Email"] && $plan_follow_id == $rows["Plans_Id"]){?>
                    <form method="post" action="unfollow_check.php"> 
					<input type="submit" name="<?php echo $rows["Plans_Id"]; ?>" value="UnFollow" class="btn btn-primary"/>				
        			</form> 
                	<?php }?>
                
				</td>
			</tr>
		</table>
       

        
        <?php 
		  $var=$rows['Plans_Id'];?>
                  	<div class="cs">  
					<a href="<?php echo "list_plan_follower.php?new=".$var?>">List Followers</a>
   					</div>
                    
        <script> 
		$( document ).ready(function() { 
    	$('#<?php echo $rows["Plans_Id"]; ?>').circliful(); 
    	}); 
    	</script> 
       
       
       
       <div style="margin:10px;">
		<input type="button" value="Comment" onClick="javascript:showreply('<?php echo $a;?>')" />
		</div>
		
		<div id="<?php echo $a;?>" style="display:none;">
		<?php
		$user = $_SESSION["user"];
   		$sql_a="SELECT * FROM Students WHERE Email='$user'";
    	$query_a=mysql_query($sql_a,$con); 						// 执行SQL主句
	
		
		$dsb= $rows["Plans_Id"];
		
		if($_POST["$a"]) {
			$content=str_replace("'", "\'", $_POST["content"]);
			$time=date('Y-m-d H:i:s');
			$sql_a="INSERT INTO Comments (Email, Time, Content, Type, No) VALUES ('$user', '$time','$content', '$b', '$dsb')";
			mysql_query($sql_a, $con);
			            if($rows["Email"]!=$_SESSION["user"]){
            $CommentMail = $rows["Email"];
            $sql_c = "INSERT INTO PersonalComments (Email, Time, Content, Type, No, Personal_Email) VALUES ('$user', '$time', '$content', '$b', '$dsb', '$CommentMail')";
            mysql_query($sql_c, $con);
        }
		}
		?>
		
		<?php $Avatar = $_SESSION["avatar"]; ?>
		
		<form enctype="multipart/form-data" method="post" onSubmit="return check()" class="body">
			<table style="width:95%; margin:10px;">
			<tr>
    		<td width="55" height="55" style="padding:5px;"><img src="<?php echo $Avatar; ?>" width="100%" height="100%"/></td>
    		<td width="65%" style="padding:5px;"><textarea style="resize:none; word-break:break-all; font-size:small; width:100%;" name="content" rows="2" placeholder="Write a comment..." maxlength="300" onchange="this.value=this.value.substring(0, 300)" onkeydown="this.value=this.value.substring(0, 300)" onkeyup="this.value=this.value.substring(0, 300)" ></textarea></td>
    		<td align="left"  style="padding:5px;"><input type="submit" name="<?php echo $a;?>" align="left" value="Submit"/></td>
    		</tr>
    		</table>
		</form>
		
		<?php
		$sql_comment="SELECT * FROM Comments WHERE No='$dsb' AND Type='$b' order by Comment_Id";
 		$query_comment=mysql_query($sql_comment,$con); 						// 执行SQL主句
 		
		while($rows_comment=mysql_fetch_array($query_comment)){	
			$email=$rows_comment["Email"];
			$s="SELECT Avatar, Name FROM Students WHERE Email='$email'"; //SQL语句，此处分页计算
 			$q=mysql_query($s,$con);
 			$r=mysql_fetch_array($q);
		?>
		
		<div style="width:100%; margin:10px;" class="yuyang">
    	 
		<table width="95%" style="table-layout:fixed;">
		<tr>
    		<th style="padding:5; width:55; height:55; overflow:hidden" valign="top" rowspan="2"><img src="<?php echo $r["Avatar"]; ?>" width="45" height="45"/></th>
    		<td style="word-wrap:break-word; padding:5;"><a href="<?php echo "page.php?new=".$email?>"><?php echo '<span style="font-weight:bolder; font-size:small;">'.$r["Name"].'</span>'?></a></td>
    		<td style="word-wrap:break-word; padding:5;" align="right"><?php echo'<span style="color:#CCCCCC; font-size:small;">'.$rows_comment["Time"].'</span>' ?></td>
    		<td></td>
    	</tr>
    	<tr>
    		<td colspan="2" style="word-wrap:break-word; padding:5;"><?php echo '<span style="font-size:small;">'.$rows_comment["Content"].'</span>' ;?></td>
    		<td>
    			<?php if($rows_comment["Email"]==$_SESSION["user"] || $rows["Email"]==$_SESSION["user"]) { ?>
					<div class="yu">  
        				<a href="<?php echo "delete_comment.php?new=".$rows_comment["Comment_Id"]?>">Delete</a>  
    				</div>
    			<?php } ?> 
    		</td>
    	</tr>
    	</table>
    	</div>
	
	<?php } ?>
	</div>
	
	<script type="text/javascript">
		function showreply(div_Id){
 		var o=document.getElementById(div_Id);
 			if(o.style.display=="none"){
    			o.style.display="block";
			}
			else{
    			o.style.display="none";
 			}
		}
		function show(div_Id){
 		var o=document.getElementById(div_Id);
    		o.style.display="block";
		}
		function none(div_Id){
 		var o=document.getElementById(div_Id);
    		o.style.display="none";
		}		
	</script>
	
	</div>
	<?php
		if($_POST["$a"]) {
			echo "<script >javascript:show('$a')</script>";
			$url="#".$c;
			?>
			<script language='javascript'>document.location = '<?php echo "#".$c; ?>'</script>

	<?php	} ?>

	<div style= "border: 0px; width=98%;"><table><tr><th height="30"></th></tr></table></div>
	
	
		
	<?php
		}
  	?>
    <?php $pg=new SubPages($each_disNums,$nums,$current_page,$sub_pages,$subPage_link,$subPage_type);?>
		</div>
		<footer>
                <hr>
                 &copy; 2017 Copyright. TCSS545 Group Project  
      			<a href="brianstorm_info.html">@Cloud Campus</a>   
                Contact us: CloudCampus@outlook.com
            </footer>
            </div>
            </div>
		</div>
</body>
</html>
