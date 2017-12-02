<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
<title>Organization Page</title>
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
		.xtop, .xbottom {display:block;
 							background:transparent; font-size:1px;} 
		.xb1, .xb2, .xb3, .xb4 {display:block; overflow:hidden;} 
		.xb1, .xb2, .xb3 {height:1px;} 
		.xb2, .xb3, .xb4 {background:#ccc; border-left:1px solid #ccc;
 							border-right:1px solid #ccc;} 
		.xb1 {margin:0 5px; background:#ccc;} 
		.xb2 {margin:0 3px; border-width:0 2px;} 
		.xb3 {margin:0 2px;} 
		.xb4 {height:2px; margin:0 1px;} 
 
		.xboxcontent {display:block; background-image:url(images/default_bg.jpg);
 						border:0 solid #ccc; border-width:0 1px;} 
		
		
		</style>
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

    <!-- Come on baby: 1. Header frame -->
<div  style="font-weight:bold;position:fixed; width:100%;height:50px; z-index:1; overflow-x:visible;">
      <div class="navbar navbar-default" role="navigation">
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


    <div class="content" style="width:100%; padding:20px 20px 0px 20px;">
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
        
        
        	<?php
                $org=$_GET['new'];
               /* if($organ==""){
                    $org=$_SESSION["mail"];
                }else{
                    $org=$organ;
                }*/

$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        			if (!$con) {
        			die('Could not connect: ' . mysql_error());
        			}
        			mysql_select_db("CloudCampusOnAWS"); 
					$sql="SELECT * FROM Organizations WHERE Email='$org'";
					$query=mysql_query($sql,$con); 						// Ö´ÐÐSQLÖ÷¾ä
					$rows=mysql_fetch_array($query);
				?>
        
       	<div class="header">
        	<b class="xtop">
        		<b class="xb1"></b>
        		<b class="xb2"></b>
        		<b class="xb3"></b>
        		<b class="xb4"></b>
    			</b>
                 
    			<div class="xboxcontent">
                	<div style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:36px; font-weight:100; top:10px;" align="center">Introduction</div>
                
                
                <div style="display:block; align-content:center; font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; padding:30px; font-size:24px;" align="center"><?php echo $rows["Introduction"]; ?></div>
                
                <div align="right">
                <table style="padding:50px;" align="right">
                <tr>
                	<table>
                	<th><td style="font-size:16px; padding:20px;" align="right"><a href="<?php echo "page.php?new=".$rows["Email"]?>"><?php echo '<span style="font-weight:bolder;">'.$rows["Name"].'</span>'?></a></td></th>
                	
              <th><td style="width:100; height:100; rowspan:2;  bgcolor:#FFFFFF; padding:5px;" align="right"> <a href="<?php echo "page.php?new=".$rows["Email"]?>"><img src="<?php echo $rows["Avatar"]; ?>" width="100%" height="100%"/></a></td></th>
              </table>
              </tr>
              </table>
              </div>

</div> 
    <b class="xbottom">
        <b class="xb4"></b>
        <b class="xb3"></b>
        <b class="xb2"></b>
        <b class="xb1"></b>
    </b> 
</div> 


<?php 
if($_POST["Follow"]){

        $sql_add = "INSERT INTO Org (O_Email, F_Email) VALUES ('$org', '$_SESSION[user]')";
         mysql_query($sql_add, $con);
}

if($_POST["UnFollow"]){
		 $sql_un = "DELETE FROM Org WHERE F_Email='$_SESSION[user]'";
		  mysql_query($sql_un, $con);
		  //echo "<script>window.location='organization_page.php';</script>";
}

                $sql_0= "SELECT F_Email FROM Org WHERE O_Email = '$org'";  
                $result_0= mysql_query($sql_0, $con); 
                
                
                while($t_result0 = mysql_fetch_array($result_0)){
                
                $foll=$t_result0[0];
                if($foll == $_SESSION["user"]){
                            break;
                        }
                }

?>


<div align="right">
<?php if($foll!=$_SESSION["user"]){?>
<form method="post" action="">
<input type="submit" name="Follow" value="Follow"/>
</form>
<?php }elseif ($foll==$_SESSION["user"]) {?>
<form method="post" action="">
<input type="submit" name="UnFollow" value="UnFollow"/>
</form>
<?php }?>
</div>

        
              
 <br/>               
<br/>

<div style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:24px;" align="center">Announcements</div>
<br/>
<?php
						//Ñ¡ÔñÊý¾Ý¿â  
		$sql="SELECT * FROM Annoucements,Organizations WHERE Annoucements.Email = '$org' and Organizations.Email = '$org' ORDER BY Announcement_Id desc"; // ²éÑ¯µÄÊý¾Ý¿â±í
 		$query=mysql_query($sql,$con); 						//Ö´ÐÐSQLÓï¾ä
 		$nums=mysql_num_rows($query); 						//×ÜÌõÄ¿Êý
 		$each_disNums=10;  									//Ã¿Ò³ÏÔÊ¾µÄÌõÄ¿Êý 
 		$sub_pages=2; 										//µ± $subPage_type Îª 2 Ê±£¬Ã¿´ÎÏÔÊ¾µÄÒ³Êý
 		$pageNums = ceil($nums/$each_disNums); 				//×ÜÒ³Êý
 		$subPage_link="organization_page.php?&page="; 					//Ã¿¸ö·ÖÒ³µÄÁ´½Ó
 		$subPage_type=1;									//Îª1Ê±,ÏÔÊ¾½á¹û1,Îª2Ê±,ÏÔÊ¾½á¹û2,ÏÔÊ¾·ÖÒ³µÄÀàÐÍ
 		$current_page=$_GET['page']!=""?$_GET['page']:1; 	//µ±Ç°±»Ñ¡ÖÐµÄÒ³
		$currentNums=($current_page-1)*$each_disNums; 		//limit ¼ÆËãÀ´ÓÃ
		$count = 1;
		
		$sql1="SELECT * FROM Annoucements,Organizations WHERE Annoucements.Email = '$org' and Organizations.Email = '$org' ORDER BY Announcement_Id desc limit $currentNums,$each_disNums"; //SQLÓï¾ä£¬´Ë´¦·ÖÒ³¼ÆËã
 		$query1=mysql_query($sql1,$con); 						// Ö´ÐÐSQLÖ÷¾ä
		
		while($rows=mysql_fetch_array($query1)){	
		$a=$rows["Announcement_Id"];
	?>
		<div class="cent">
   		<table width="98%" border="0">
			<table>
  			<tr>
    			<th width="60" height="60" rowspan="2" align="center" bgcolor="#FFFFFF" style="padding:5px;"><a href="<?php echo "page.php?new=".$rows["Email"]?>"><img src="<?php echo $rows["Avatar"]; ?>" width="100%" height="100%"/></a></th>
    			<td align="left" bgcolor="#FFFFFF" style="padding:5px;">
    				<a href="<?php echo "page.php?new=".$rows["Email"]?>"><?php echo '<span style="font-weight:bolder;">'.$rows["Name"].'</span>'?></a>
    			</td>
  			</tr>
  			<tr><td style="padding:5px;"><?php echo'<span style="color:#CCCCCC; font-size:small">'.$rows["time"].'</span>' ?></td></tr>
  			<tr><td colspan="2" align="left" valign="top" bgcolor="#FFFFFF">
  					<table border="0" style="width:100%; margin:5px;">
  						<tr><td><?php echo $rows["Content"]; ?></td></tr>
  					</table>
  			</td></tr>
  			<table>
  			<?php if ($rows["Photo"] != null) { ?>
  				<table><tr>
  					<th align="center" bgcolor="#FFFFFF"><img src="<?php echo $rows["Photo"]; ?>" width="100%" height="100%" class="img"/></th>
  				</tr></table>
  				<?php } ?>
        <table><tr><th height="30"></th></tr></table>
        <br/>

		<table align="right" width="95%">
        	<tr>
        		<td align="right">

                    Follower: <?php echo $rows["Follower_Num"]?>
                    <br/>
                 <br/>   
                    <?php 
					
 				$sql_0= "SELECT Announcement_Follow_Id FROM Follow WHERE Email = '$_SESSION[user]'";  
            	$result_0= mysql_query($sql_0, $con); 
				
            	
				while($t_result0 = mysql_fetch_array($result_0)){
				
            	$announce_follow_id=$t_result0[0];
				if($announce_follow_id == $rows["Announcement_Id"]){
							break;
						}
				}
				
					if($poster != $rows["Email"] && $announce_follow_id != $rows["Announcement_Id"]){ // Not poster user can follow and only follow once?> 
                	<form method="post" action="follow_check.php">
        			<input type="submit" name="<?php echo $rows["Announcement_Id"]; ?>" value="Follow" class="btn btn-primary"/>
                    </form>
                    
                    <?php } else if($poster != $rows["Email"] && $announce_follow_id == $rows["Announcement_Id"]){?>
                    <form method="post" action="announce_unfollow_check.php"> 
					<input type="submit" name="<?php echo $rows["Announcement_Id"]; ?>" value="UnFollow" class="btn btn-primary"/>				
        			</form> 
                	<?php }?>
   
				</td>
			<tr>
		</table>
        
     
        <div class="cs">  
			<a href="<?php echo "List_announce_follower_person.php?new=".$a?>">List Followers</a>
   		</div>
                  
        
  		<table><tr><th height="30"></th></tr></table>
	
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
	<div style= "border: 0px; width=98%;"><table><tr><th height="30"></th></tr></table></div>
	
		
	<?php
	}
  	?>
  	
  	

	<?php $pg=new SubPages($each_disNums,$nums,$current_page,$sub_pages,$subPage_link,$subPage_type);?>
  </div>
    </div>
</body>
</html>