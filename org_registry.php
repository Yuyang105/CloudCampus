<?php
	// Start session.
	
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<!--[if IE 8 ]><html lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>

		<!-- Reason -->
			
		<meta id="res" name="viewport" content="initial-scale=1 maximum-scale=1"/>
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="generator" content="RapidWeaver" />
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" media="all" href="rw_common/themes/reason/consolidated-7.css" />
		
		
		<!--[if lt IE 9]><script src="../../rw_common/themes/reason/ie.js"></script><![endif]-->
		
		
		
		
	</head>
	<body>
		<div id="wrapper">
			<div id="shadow">
				<div id="headerWrap">
					<div class="width">
					<header class="theme">
						<div id="noblur">
							<img src="rw_common/images/logo2.jpg" width="640" height="1136" alt="Site logo"/>
							<div id="title">
								<h1><a id="siteLink" href="http://www.themeofsss.xyz/">Cloud Campus</a></h1><br>
								<h2>Meet your friends here</h2>
							</div>
							<div class="clear"></div>
						<div id="menu"></div>
						</div>
						<div id="bgblur"></div>
					</header>
					<nav class="theme"><ul><li><a href="index.php" rel="">Person</a><ul><li><a href="index.php" rel="">Log in</a></li><li><a href="registry.php" rel="">Sign up</a></li></ul></li><li><a class="currentAncestor" href="organization_login.php" rel="">Organization</a><ul><li><a  href="organization_login.php" rel="">Log in</a></li><li><a href="org_registry.php" class="current" rel="">Sign up</a></li></ul></li></ul></nav>
					</div>
				</div><!-- #headerWrap -->
				<div id="feature">
					<div id="extraContainer1"></div>
				</div>
				<section id="container" class="theme">
					<section id="content" class="theme">
						<div id="push"><br>
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form method="post" action="org_check.php">
	 <div>
		<label>Name</label>
        <span class="error">* <?php echo $nameErr;?></span>
		<input class="form-input-field" type="text" name ="name"/><br /><br />

		<label>Email Address</label>
        <span class="error">* <?php echo $emailErr;?></span>
		<input class="form-input-field" type="text" name ="email"/><br /><br />

		<label>Password</label>
        <span class="error">* <?php echo $passwordErr;?></span>
		<input class="form-input-field" type="password" name="password" style="background:#EEEEEE;" /><br /><br />

		<label>Password Confirmation</label> <span class="error">* <?php echo $psw_confirmErr;?></span>
		<input class="form-input-field" type="password" name="psw_confirm" style="background:#EEEEEE;" /><br /><br />

		
		<input class="form-input-button" type="submit" name="Submit" value="Sign up" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?></div>
					</section>
					
					<footer class="theme"><span>&copy; 2017 TCSS545</span><div class="clear"></div></footer>
				</section>
			</div>
		</div>
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
		
		<script type="text/javascript" src="rw_common/themes/reason/javascript.js"></script>
		<script type="text/javascript" src="rw_common/themes/reason/function.js"></script>
	</body>
</html>
