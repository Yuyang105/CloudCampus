<?php require_once("include/global.php"); ?>
<?php  
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "Personal login"){
        $email = $_POST["email"];  
        $password = $_POST["password"];

        /*
        帐号验证，可以考虑忽略大小写。。小功能，后期加。。
        */

        if($email == "" || $password == "") {
            echo "<script>alert('Please enter email or password'); history.go(-1);</script>";  
        }  
        else {
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
            if (!$con) {
                die('Could not connect: ' . mysql_error());
            }
            mysql_select_db("CloudCampusOnAWS");  
            $sql = "SELECT Email, Blocked FROM Accounts WHERE Email = '$_POST[email]' and Password = '$_POST[password]'";  
            $result = mysql_query($sql, $con);  
            $num = mysql_num_rows($result);           
            $t_result = mysql_fetch_array($result);		// blocked?
            
            if($num && $t_result[1] == 0) {   //Personal
            	
            	$_SESSION["user"]=$_POST["email"];
           		$sql = "SELECT Name, Gender, Hobbies, Major, Birth, Contact_No, Avatar FROM Students WHERE Email = '$_SESSION[user]'";  
            	$result = mysql_query($sql, $con); 
            	$t_result = mysql_fetch_array($result);
				
				if($result==0 || $t_result==0){
					 echo "<script>alert('Incorrect email or password!');history.go(-1);</script>";
				}
				else{
            	$_SESSION["name"]=$t_result[0];
            	$_SESSION["gender"]=$t_result[1];
				$_SESSION["hobbies"]=$t_result[2];
				$_SESSION["major"]=$t_result[3];
				$_SESSION["birth"]=$t_result[4];
				$_SESSION["contact_no"]=$t_result[5];
				$_SESSION["avatar"]=$t_result[6];
				$_SESSION["flag"]=0;
                echo "<script>alert('logged in..');window.location='personal_index.php';</script>"; 
				}
            }
            else {  
                echo "<script>alert('Incorrect email or password!');history.go(-1);</script>";  
            }  
			
        }  
    }
?>

 <?php  
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "Organization login"){
        $email1 = $_POST["email"];  
        $password1 = $_POST["password"];

        /*
        帐号验证，可以考虑忽略大小写。。小功能，后期加。。
        */

        if($email1 == "" || $password1 == "") {
            echo "<script>alert('Please enter email or password'); history.go(-1);</script>";  
        }  
        else {
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
            if (!$con) {
                die('Could not connect: ' . mysql_error());
            }
            mysql_select_db("CloudCampusOnAWS");  
            $sql = "SELECT Email, Blocked FROM Accounts WHERE Email = '$_POST[email]' and Password = '$_POST[password]'";  
            $result = mysql_query($sql, $con);  
            $num = mysql_num_rows($result);           
            $t_result = mysql_fetch_array($result);		// blocked?
			
			    $_SESSION["user"]=$_POST["email"];
           		$sql = "SELECT Name FROM Organizations WHERE Email = '$_SESSION[user]'";  
            	$result = mysql_query($sql, $con); 
            	$t_result = mysql_fetch_array($result);
					if($result==0 || $t_result==0){
					 echo "<script>alert('Incorrect email or password!');history.go(-1);</script>";
				}
				else{
            	$_SESSION["name"]=$t_result[0];
            
          
                echo "<script>alert('logged in..');window.location='org_index.php';</script>";	
				}
			
        }  
    }
?>
<?php 
	if($_GET['logout'] == 'true') {
		session_destroy();
		echo "<script language=javascript>alert('You successfully logged out!');window.location='login.php';</script>";
	}
?>

<!DOCTYPE HTML>
<html>
<head>
 <link href='http://fonts.useso.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>

    

    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">
</head>
<body  class=" theme-blue">
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
    
     <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">


 <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Cloud Campus</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">

        </div>
      </div>
    </div>
    
        <div class="dialog">
    <div class="panel panel-default">
        <p class="panel-heading no-collapse">Login</p>
        <div class="panel-body">
        
<form method="post" action="" onSubmit="return check()">
 <div class="form-group">
                   <label>Email</label>
                   <input type="text" name="email" class="form-control span12">
                </div>
 <div class="form-group">
                   <label>Password</label>
                   <input type="password" name="password" class="form-control span12">
                </div>

	<input type="submit" name="Submit" class="btn btn-primary pull-right" value="Personal login" /> 
    <input type="submit" name="Submit" class="btn btn-primary pull-left"  value="Organization login" />  

</form>
</div>
</div>
<p><a href=" registry.php"> Sign up for Student</a></p>
    
<p><a href="org_registry.php"> Sign up for Organization</a></p>

</body>
</html>