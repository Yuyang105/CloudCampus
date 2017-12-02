<?php require("include/global.php"); ?>
<?php require("login_check.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>User information</title>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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

</head>

<?php
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
        if (!$con) {
        	die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("CloudCampusOnAWS"); 
		$sql="SELECT Avatar FROM Students WHERE Email='$_SESSION[user]'";
		$query=mysql_query($sql,$con); 						// Ö´ÐÐSQLÖ÷¾ä
		$rows=mysql_fetch_array($query);
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
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-fw fa-cloud"></span> Cloud Campus</span></a></div>

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

        <div class="header">
            
            <h1 class="page-title">My Account</h1>
                    <ul class="breadcrumb">
            <li><a href="personal_index.php">Home</a> </li>
            <li class="active"><?php
                        echo $_SESSION["name"];
                        ?></span></li>
        </ul>

        </div>

        <div class="main-content">
            
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
  <li><a href="#profile" data-toggle="tab">Password</a></li>
</ul>

<div class="row">
  <div class="col-md-4">
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">

        <form id="tab1" method="post" action="edit_info.php">
        <div class="form-group">
        <label>User Account:</label>
        <input type="text" name="account" value="<?php
            session_start();
            echo $_SESSION["user"];
        ?>" class="form-control">
        </div>
        <div class="form-group">
        <label>User Name:</label>
        <input type="text" name="name" value="<?php
                session_start(); 
                echo $_SESSION["name"];
            ?>"
               class="form-control">
        </div>
        <div class="form-group">
        <label>Hobbies:</label>
        <input type="text" name="hobbies" value="<?php
                session_start();  
                echo $_SESSION["hobbies"];
        ?>" class="form-control">
        </div>
        <div class="form-group">
        <label>Major:</label>
        <input type="text" name="major" value="<?php
                session_start();  
                echo $_SESSION["major"];
        ?>" class="form-control">
        </div>

        <div class="form-group">
        <label>Birth:</label>
        <input type="date" name="birth" value="<?php
                session_start();  
                echo $_SESSION["birth"];
        ?>" class="form-control">
        </div>

        <div class="form-group">
        <label>Contact_No:</label>
        <input type="text" name= "contact_no" value="<?php
                session_start();  
                echo $_SESSION["contact_no"];
        ?>" class="form-control">

        </div>
        <div class="btn-toolbar list-toolbar">
        <button type="submit" name="Submit" value="Update" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
		</div>
        </form>
        </div>
        
        <div class="tab-pane fade" id="profile">

        <form id="tab2"  method="post" action="edit_info.php">
          <div class="form-group">
            <label>New Password</label>
            <input type="password" name= "password" class="form-control">
            
          </div>
        <div class="btn-toolbar list-toolbar">
        <button type="submit" name="Submit" value="Save" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
		</div>
        </form>
      </div>
    </div>   


  </div>
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


