<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?>
<?php require_once("friend_news.php"); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Personal News</title>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

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
    			/*ʹ��CSS3�е�transition���Ը�<span>��ǩ������ɫ��ӽ���Ч��*/  
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
			bottom:0px; 
            opacity: 0;  
            display: block;
            float:left;  
            font-size: 12px;  
            transition: 0.3s;  
            -webkit-transition: .5s;  
            -moz-transition: .5s; 
			postion:absolute; 
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

	<body class="theme-blue" >

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


	<!-- Come on baby: 1. Header frame -->
      <div class="navbar navbar-default" role="navigation" style="position:fixed; width:100%;height:50px; z-index:1; overflow-x:visible;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="personal_index.php"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Cloud Campus</span></a></div>
          
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
                            echo $_SESSION["avatar"]; ?>" style="width:100px;height:100px"/></a>
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
                <li><a tabindex="-1" href="login.php?logout=true" target="_parent">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
  
  	<!-- Come on baby: 2. Main Content frame -->
    <div style="padding:50px 0px 0px 0px;">
<!--left-->
<div class="sidebar-nav" style="height:100%; width:80%;">
    
    <ul id="navigation">
    <li><a href="#" data-target=".cc-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> CloudCampus<i class="fa fa-collapse"></i></a></li>
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
          
   <li><a href="#" data-target=".contact-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Contacts<i class="fa fa-collapse"></i></a></li>
   <li> <ul class="contact-menu nav nav-list collapse in">
          <li ><a href="organization_list.php" target="rightFrame"><span class="fa fa-caret-right"></span> Clubs</a></li>
          <li ><a href="friend_list.php" target="rightFrame"><span class="fa fa-caret-right"></span> Friends</a></li>
            </ul>
      </li>
      
                                <li><a href="#" data-target=".not-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-heart"></i> Notifications<i class="fa fa-collapse"></i></a></li>
    <li><ul class="not-menu nav nav-list collapse in">
          
          <li ><a href="request.php" target="rightFrame"><span class="fa fa-caret-right"></span> Requests</a></li>
            </ul> </li>
                     
    </div>


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>


    <div class="content" style="width:80%; padding:20px 20px 0px 20px;">
    <p id="back-to-top"><a href="#top"><span></span>Back to Top</a></p>  
        <script src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.7.2.min.js"></script>  
        <script>  
            $(function(){  
        //�������λ�ô��ھඥ��100��������ʱ����ת��ӳ��֣�������ʧ  
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
  
         
                $("#back-to-top").click(function(){  
                    $('body,html').animate({scrollTop:0},1000);  
                    return false;  
                });  
            });  
        }); 
        </script> 
        <div class="header">
        	<h1 class="page-title"><div style="color:#EE2F53">Popular Plan List</div></h1>
                    <ul class="breadcrumb">
            <li><a href="personal_index.php">Home</a> </li> </ul>
        </ul>
        </div>
        
        
 <?php
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
              if (!$con) {
              die('Could not connect: ' . mysql_error());
              }
              mysql_select_db("CloudCampusOnAWS"); 
		
    	$sql="SELECT * FROM PersonalPlans,Students WHERE PersonalPlans.Email=Students.Email ORDER BY Follower_Num desc"; // ²éÑ¯µÄÊý¾Ý¿â±í
		$query=mysql_query($sql,$con); 						//Ö´ÐÐSQLÓï¾ä
 		$nums=mysql_num_rows($query); 						//×ÜÌõÄ¿Êý
 		$each_disNums=10;  									//Ã¿Ò³ÏÔÊ¾µÄÌõÄ¿Êý 
 		$sub_pages=2; 										//µ± $subPage_type Îª 2 Ê±£¬Ã¿´ÎÏÔÊ¾µÄÒ³Êý
 		$pageNums = ceil($nums/$each_disNums); 				//×ÜÒ³Êý
 		$subPage_link="hot_plan.php?&page="; 					//Ã¿¸ö·ÖÒ³µÄÁ´½Ó
 		$subPage_type=1;									//Îª1Ê±,ÏÔÊ¾½á¹û1,Îª2Ê±,ÏÔÊ¾½á¹û2,ÏÔÊ¾·ÖÒ³µÄÀàÐÍ
 		$current_page=$_GET['page']!=""?$_GET['page']:1; 	//µ±Ç°±»Ñ¡ÖÐµÄÒ³
		$currentNums=($current_page-1)*$each_disNums; 		//limit ¼ÆËãÀ´ÓÃ

		$sql_plan="SELECT * FROM PersonalPlans,Students WHERE PersonalPlans.Email=Students.Email ORDER BY Follower_Num desc limit $currentNums,$each_disNums"; //SQLÓï¾ä£¬´Ë´¦·ÖÒ³¼ÆËã
 		$query_plan=mysql_query($sql_plan,$con); 						// Ö´ÐÐSQLÖ÷¾ä
		
		while($rows=mysql_fetch_array($query_plan)){	
		$poster = $_SESSION['user'];
		$plan_id = $rows["Plans_Id"];
	?>

<div class="cent">
        
		<table width="98%" border="0" cellspacing="8" cellpadding="0">

  			
            
    			<th width="60" height="60" rowspan="2" align="center" bgcolor="#FFFFFF" style="word-wrap:break-word; padding:5;"><img src="<?php echo $rows["Avatar"]; ?>" width="60" height="60"/></th>
    			<td align="left" bgcolor="#FFFFFF" style="padding:5px;">
    				<a href="<?php echo "page.php?new=".$rows["Email"]?>"><?php echo '<span style="font-weight:bolder;">'.$rows["Name"].'</span>'?></a>
    			</td>
                <td style="word-wrap:break-word; padding:5; text-align:center; vertical-align:middle; font-size:24px;">
                	<div align="right">
                    <a href="<?php echo "plan.php?new=".$rows["Email"]?>"><?php echo $rows["Title"]?></a>
                    <br/>
                </div>
                </td>
  			<tr><td style="padding:5px;"><?php echo'<span style="color:#CCCCCC; font-size:small">'.$rows["Time"].'</span>' ?></td></tr>

        	<tr>
            	<td>&nbsp;</td>
                <td>&nbsp;</td>
        		<td align="right">
                 Follower: <?php echo $rows["Follower_Num"]?>
                    <br/>
                    <br/>
                    
                    <?php   //SHOW follow bottun or not 
 					$sql_follow = "SELECT Plan_Follow_Id FROM Follow WHERE Email = '$_SESSION[user]'";  
            		$result_a = mysql_query($sql_follow, $con); 
				
            		while($t_result = mysql_fetch_array($result_a)){
            		$plan_follow_id=$t_result[0];
					if($plan_follow_id == $rows["Plans_Id"]){
							break;
						}
					 $var=$rows['Plans_Id'];
					}?>
					
                    
                     <?php
					if($poster != $rows["Email"] && $plan_follow_id != $rows["Plans_Id"]){ // Not poster user can follow and only follow once?> 
                	<form method="post" action="plan_check.php">
        			<input type="submit" name="<?php echo $rows["Plans_Id"]; ?>" value="Follow"/>
                    </form>
                    
                    <?php } else if($poster != $rows["Email"] && $plan_follow_id == $rows["Plans_Id"]){?>
                    <form method="post" action="unfollow_check.php"> 
					<input type="submit" name="<?php echo $rows["Plans_Id"]; ?>" value="UnFollow"/>				
        			</form> 
                	<?php }?>
                
				</td>
			</tr>
            <tr><td></td><td>
                <div class="cs">  
				<a href="<?php echo "list_plan_follower.php?new=".$var?>">List Followers</a>
   				</div>
                </td></tr>
		</table>
        
         

       
           

	
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
    </br>
 <?php
	}
?>
 <?php $pg=new SubPages($each_disNums,$nums,$current_page,$sub_pages,$subPage_link,$subPage_type);?>
 

</div>
</div>

</body>


</html>
