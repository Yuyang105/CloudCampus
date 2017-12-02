<?php
	// Start session.
	
$name = $gender = $email = $password = $psw_confirm = "";
$nameErr = $genderErr = $emailErr = $passwordErr = $psw_confirmErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$nameErr = "Sorry, name is required";
	} else {
		$name = test_input($_POST["name"]);
		// Check name
		if (!preg_match("/^[a-zA-Z ] *$/", $name)) {
			$nameErr = "Sorry, only letters and space allowed";
			// 检查文本长度，后期慢慢加。。。。
			
			/* 最好都选用过滤器。。避免一切bug。。
			 * 参见w3c。。
			 * 玩得开心。 
			 */
		}
	}
	if (empty($_POST["gender"])) {
		$genderErr = "Sorry, gender is required";
	} else {
		$gender = test_input($_POST["gender"]);
	}
	if (empty($_POST["email"])) {
		$emailErr = "Sorry, email is required";
	} else {
		$email = test_input($_POST["email"]);
		// Check email
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
			$emailErr = "Invalid email format"; 
		}
	}
	if (empty($_POST["password"])) {
		$passwordErr = "Sorry, password is required";
	} else {
		$password = test_input($_POST["password"]);
	}
	if (empty($_POST["psw_confirm"])) {
		$psw_confirmErr = "Sorry, psw_confirm is required";
	} else {
		$psw_confirm = test_input($_POST["psw_confirm"]);
	}
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
	
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
		<link rel="stylesheet" type="text/css" media="all" href="rw_common/themes/reason/consolidated-r.css" />
		
		
		<!--[if lt IE 9]><script src="../rw_common/themes/reason/ie.js"></script><![endif]-->
		
		
		
		
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
					<nav class="theme"><ul><li><a class="currentAncestor" href="./" rel="">TCSS545</a><ul><li>
						<a href="index.php" rel="">Log in</a></li><li><a href="org_registry.php" rel="">Sign up</a></li></ul></li></ul></nav>
					</div>
				</div><!-- #headerWrap -->
				<div id="feature">
					<div id="extraContainer1"></div>
				</div>
				<section id="container" class="theme">
					<section id="content" class="theme">
						<div id="push"><br>
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form method="post" action="registry_check.php">
	 <div>
		<label>Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="name" size="40"/><br /><br />

		<label>Gender</label> *<br />
		<input  type="radio" name="gender" value="0" />
			<label>Male</label><br />

		<input type="radio" name="gender" value="1" />
			<label>Female</label><br />

<br />
		<label>Email</label> *<br />
		<input class="form-input-field" type="text" name="email" /><br /><br />

		<label>Password</label> *<br />
		<input class="form-input-field" type="password" name="password" style="background:#EEEEEE;"><br /><br />

		<label>Password Confirmation</label> *<br />
		<input class="form-input-field" type="password" name="psw_confirm" style="background:#EEEEEE;"><br /><br />

		
		<input type="submit" name="Submit" class="form-input-button"  value="Sign up"/>
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
