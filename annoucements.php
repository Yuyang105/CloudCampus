<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Annoucements</title>
        
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

    

    <div class="navbar navbar-default" role="navigation" style="position:fixed; width:100%; height:50px; z-index:1; overflow-x:visible;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="org_index.php"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Cloud Campus</span></a></div>

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
            <h1 class="page-title">Announcements</h1>
                <ul class="breadcrumb">
                    <li><a href="org_index.php">Home</a> </li>
                    <li class="active">Announcements</li>
                 </ul>
        </div>
    
    
    <div style="width:100%;">
	<table width="98%">
		<tr>
			<td align="right">
				<input type="button" name="Post"  class="btn btn-primary" value="Post Announcements" onClick ="location.href='post_annouce.php'"/>
			</td>
		</tr>
	</table>
    <br/><br/>
 	<?php
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        if (!$con) {
        	die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("CloudCampusOnAWS");  							//Ñ¡ÔñÊý¾Ý¿â  
		$sql="SELECT * FROM Annoucements,Organizations WHERE Annoucements.Email=Organizations.Email ORDER BY Announcement_Id desc"; // ²éÑ¯µÄÊý¾Ý¿â±í
		$query=mysql_query($sql,$con); 						//Ö´ÐÐSQLÓï¾ä
 		$nums=mysql_num_rows($query); 						//×ÜÌõÄ¿Êý
 		$each_disNums=10;  									//Ã¿Ò³ÏÔÊ¾µÄÌõÄ¿Êý 
 		$sub_pages=2; 										//µ± $subPage_type Îª 2 Ê±£¬Ã¿´ÎÏÔÊ¾µÄÒ³Êý
 		$pageNums = ceil($nums/$each_disNums); 				//×ÜÒ³Êý
 		$subPage_link="annoucements.php?&page="; 					//Ã¿¸ö·ÖÒ³µÄÁ´½Ó
 		$subPage_type=1;									//Îª1Ê±,ÏÔÊ¾½á¹û1,Îª2Ê±,ÏÔÊ¾½á¹û2,ÏÔÊ¾·ÖÒ³µÄÀàÐÍ
 		$current_page=$_GET['page']!=""?$_GET['page']:1; 	//µ±Ç°±»Ñ¡ÖÐµÄÒ³
		$currentNums=($current_page-1)*$each_disNums; 		//limit ¼ÆËãÀ´ÓÃ

		$sql_a="SELECT * FROM Annoucements,Organizations WHERE Annoucements.Email=Organizations.Email ORDER BY Announcement_Id desc limit $currentNums,$each_disNums"; //SQLÓï¾ä£¬´Ë´¦·ÖÒ³¼ÆËã
 		$query_a=mysql_query($sql_a,$con); 	
		?>
        <?php
		$b=3;					// Ö´ÐÐSQLÖ÷¾ä
		while($rows=mysql_fetch_array($query_a)){	
		$a = $rows["Announcement_Id"];
		$c ="locate".$a;
		
	?>
    
		<a name="<?php echo $c ?>"></a>
		<div class="cent">
        
		<?php if($rows["Email"]==$_SESSION["user"]) { ?>
		<div class="cs">  
        <a href="<?php echo "annouce_delete.php?announcement=".$a?>">Delete</a>  
    	</div>
    	<?php } ?>  


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
		<table width="95%">
        	<tr>
        		<td align="left">
                	 Follower: <?php echo $rows["Follower_Num"]?>
                    <br/>
				</td>
			<tr>
		</table>
        
     
                    <div class="cs">  
					<a href="<?php echo "list_announce_follower.php?new=".$a?>">List Followers</a>
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
	<?php
		if($_POST["$a"]) {
			echo "<script >javascript:show('$a')</script>";
			$url="#".$c;
			?>
			<script language='javascript'>document.location = '<?php echo "#".$c; ?>'</script>

	<?php	} ?>

	<div style= "border: 0px; width=98%;"><table><tr><th height="30"></th></tr></table></div>
	
	<?php } ?>
    
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
	
	
</body>
</html>
