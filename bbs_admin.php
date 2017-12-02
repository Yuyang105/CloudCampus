<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?> 

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Friend Message</title>
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


<?php
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("CloudCampusOnAWS");
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
    
    
 <div style="padding:50px 0px 0px 0px;">  
<div class="sidebar-nav" style="height:100%;">
    
     <ul id="navigation">
    <li><a href="#" data-target=".cc-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-home"></i> CloudCampus<i class="fa fa-collapse"></i></a></li>
<li>   <ul class="cc-menu nav nav-list collapse in">
            <li><a href="news.php" target="rightFrame"><span class="fa fa-caret-right"></span> Friends' News</a></li>
              </ul>
            </li>
            
    <li><a href="#" data-target=".post-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Post<i class="fa fa-collapse"></i></a></li>
  <li>  <ul class="post-menu nav nav-list collapse in">
          <li ><a href="post_news.php" target="rightFrame"><span class="fa fa-caret-right"></span> News</a></li>
            </ul>
      </li>
          
                          <li><a href="#" data-target=".contact-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-send"></i> Contacts<i class="fa fa-collapse"></i></a></li>
   <li> <ul class="contact-menu nav nav-list collapse in">
          <li ><a href="friend_list.php" target="rightFrame"><span class="fa fa-caret-right"></span> Friends</a></li>
            </ul>
      </li>
      
                                <li><a href="#" data-target=".not-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-heart"></i> Notifications<i class="fa fa-collapse"></i></a></li>
    <li><ul class="not-menu nav nav-list collapse in">
          <li ><a href="bbs_admin.php" target="rightFrame"><span class="fa fa-caret-right"></span> Messages</a></li>
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
          <h1 class="page-title">Friends Message</h1>
                    <ul class="breadcrumb">
            <li><a href="personal_index.php">Home</a> </li>
            <li class="active">Friends Message</li>
        </ul>
        </div>

<?php
    $sql="SELECT * FROM PersonalComments WHERE Personal_Email='$_SESSION[user]' ORDER BY Comment_Id desc";
    $query=mysql_query($sql,$con);                      //Ö´ÐÐSQLÓï¾ä
    $nums=mysql_num_rows($query);                       //×ÜÌõÄ¿Êý
    $each_disNums=5;                                    //Ã¿Ò³ÏÔÊ¾µÄÌõÄ¿Êý 
    $sub_pages=2;                                       //µ± $subPage_type Îª 2 Ê±£¬Ã¿´ÎÏÔÊ¾µÄÒ³Êý
    $pageNums = ceil($nums/$each_disNums);              //×ÜÒ³Êý
    $subPage_link="bbs_admin.php?&page=";                     //Ã¿¸ö·ÖÒ³µÄÁ´½Ó
    $subPage_type=1;                                    //Îª1Ê±,ÏÔÊ¾½á¹û1,Îª2Ê±,ÏÔÊ¾½á¹û2,ÏÔÊ¾·ÖÒ³µÄÀàÐÍ
    $current_page=$_GET['page']!=""?$_GET['page']:1;    //µ±Ç°±»Ñ¡ÖÐµÄÒ³
    $currentNums=($current_page-1)*$each_disNums;       //limit ¼ÆËãÀ´ÓÃ
    
    $sql_request="SELECT * FROM PersonalComments WHERE Personal_Email='$_SESSION[user]' ORDER BY Comment_Id desc limit $currentNums,$each_disNums";
    $query_request=mysql_query($sql_request,$con); 
    
    while($rows=mysql_fetch_array($query_request)){
        $sql1="SELECT Avatar, Name, Email FROM Students WHERE Email='$rows[Email]'";
        $query1=mysql_query($sql1,$con);                        // Ö´ÐÐSQLÖ÷¾ä
        $rows1=mysql_fetch_array($query1);
        $type = $rows["Type"];
        $no = $rows["No"]; 
?>

<div style="border: 2px #CCCCCC solid; width:100%; margin:5px; auto;" class = "yuyang">         
<div class="yu">
    <a href="<?php echo "delete_message.php?new=".$rows["Comment_Id"]?>">Delete</a> 
</div>
<table width="90%" style="table-layout:fixed;">
    <br/><br/>
<table margin="5px">
    <tr>
       
        <th width="60" height="60" rowspan="2" align="center" bgcolor="#FFFFFF" style="padding:5px;"><a href="<?php echo "page.php?new=".$email?>"><img src="<?php echo $rows1[0]; ?>" style="width:50px;height:50px"/></a></div></th>
        
        <td style="word-wrap:break-word; padding:5;margin:5px;"><a href="<?php echo "page.php?new=".$rows1[2]?>"><?php echo '<span style="font-weight:bolder; font-size:small;">'.$rows1[1].'</span>'?></a></td>
     
        <td></td>

    </tr>
    <tr>
        <td colspan="2" style="word-wrap:break-word; padding:5;">Reply  <a href="personal_page"><?php echo '<span style="font-weight:bolder;">'.$_SESSION["name"].'</span>'?></a></td>
    </tr>
</table>
<br/>
    <br/>

<table style="table-layout:fixed;">
    <tr>
        <th>
            <td colspan="2" style="word-break:break-all; padding:5;">
                <?php if ($type=1) { $url = "news.php#locate".$no; ?>
                    Message: <a href="<?php echo $url; ?>"><?php echo '<span style="font-size:small;">'.$rows["Content"].'</span>' ;?></a>
                <?php } else if ($type=2) { "plan.php#locate".$no;?>
                    Message: <a href="<?php echo $url; ?>"><?php echo '<span style="font-size:small;">'.$rows["Content"].'</span>' ;?></a>
                <?php } else if ($type=3) { $url = "annoucements.php#locate".$no; ?>
                    Message: <a href="<?php echo $url; ?>"><?php echo '<span style="font-size:small;">'.$rows["Content"].'</span>' ;?></a>
                <?php } ?>

                
            </td>
        </th>
    </tr>

</table>

<br/>
<div align="right">
<table>
    <td style="word-wrap:break-word; padding:5;" ><?php echo'<span style="color:#CCCCCC; font-size:small;">'.$rows["Time"].'</span>' ?></td>
</table>

</table>
</div>
<div align="center"></div>

</br>
</br>
</div>
<?php
}
?>
	<?php $pg=new SubPages($each_disNums,$nums,$current_page,$sub_pages,$subPage_link,$subPage_type);?>
			<footer>
                <hr>
                 &copy; 2017 Copyright. TCSS545 Group Project  
      			<a href="brianstorm_info.html">@Cloud Campus</a>   
                Contact us: CloudCampus@outlook.com
            </footer>
</div>
</body>
</html>



