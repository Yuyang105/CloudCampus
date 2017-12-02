<?php require_once("include/global.php"); ?>
<?php require_once("login_check.php"); ?> 

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Friend Request</title>


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
                    <div class="avatar" >
                      <img src="<?php 
                            session_start(); 
                            echo $_SESSION["avatar"]; ?>" width="144" height="144"/>
                    </div>
                    <span><?php
                        session_start();  
                        echo $_SESSION["name"];
                        ?></span>
                  </li>

               <li><a href="update_personal_info.php">My account</a></li>
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
          <li ><a href="organization_list1.php" target="rightFrame"><span class="fa fa-caret-right"></span> Clubs</a></li>
            </ul>
      </li>
      
                                <li><a href="#" data-target=".not-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-heart"></i> Notifications<i class="fa fa-collapse"></i></a></li>
    <li><ul class="not-menu nav nav-list collapse in">
          <li ><a href="bbs_admin1.php" target="rightFrame"><span class="fa fa-caret-right"></span> Messages</a></li>
          <li ><a href="request1.php" target="rightFrame"><span class="fa fa-caret-right"></span> Requests</a></li>
            </ul> </li>
                     
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
          <h1 class="page-title">Friends Request</h1>
                    <ul class="breadcrumb">
            <li><a href="personal_index.php">Home</a> </li>
            <li class="active">Friends Request</li>
        </ul>
        </div>
<?php
	$sql="SELECT * FROM FriendRequest WHERE Email='$_SESSION[user]'";
	$query=mysql_query($sql,$con);
	while($rows=mysql_fetch_array($query)){
		$sql1="SELECT Avatar, Name FROM Students WHERE Student_Id='$rows[Req_ID]'";
		$query1=mysql_query($sql1,$con); 						// Ö´ÐÐSQLÖ÷¾ä
		$rows1=mysql_fetch_array($query1);	
?>
<table>
  	<tr>
    	<th width="50" height="50" rowspan="2" align="center" bgcolor="#FFFFFF"><img src="<?php echo $rows1[0]; ?>" width="100%" height="100%"/></th>
    		<td align="left" bgcolor="#FFFFFF">
    			<a href="page.php"><?php echo '<span style="font-weight:bolder;">'.$rows1[1].'</span>'?></a>
    		</td>
            
 	</tr>
</table>
</br>
<td> Wants to add you as a friend</td>
<form method="post" action="new_friend.php" >
	</br>
       <input type="submit" name="<?php echo $rows["Req_ID"]; ?>" value="Add"/>
</form>
<form method="post" action="cancel_friend.php" >
       <input type="submit" name="<?php echo $rows["Req_ID"]; ?>" value="Cancel"/>
</form>
<?php
	}
?>

</div>
</body>
</html>