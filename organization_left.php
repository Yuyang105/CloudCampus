<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html"/>
		<title>CloudCampus</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.easing.js"></script>
		<script type="text/javascript" src="js/jquery.dimensions.js"></script>
		<script type="text/javascript" src="js/jquery.accordion.js"></script>
		<script language="javascript">
			jQuery().ready(function(){
				jQuery('#navigation').accordion({
					header: '.head',
					navigation1: true, 
					event: 'click',
					fillSpace: true,
					animated: 'bounceslide'
				});
			});
		</script>
		
		<style type="text/css">
			<!--
				body {
					margin:0px;
					padding:0px;
					font-size: 12px;
				}
				#navigation {
					margin:0px;
					padding:0px;
					width:147px;
				}
				#navigation a.head {
					cursor:pointer;
					display:block;
					font-weight:bold;
					margin:0px;
					padding:5px 0 5px;
					text-align:center;
					font-size:12px;
					text-decoration:none;
				}
				#navigation ul {
					border-width:0px;
					margin:0px;
					padding:0px;
					text-indent:0px;
				}
				#navigation li {
					list-style:none; display:inline;
				}
				#navigation li li a {
					display:block;
					font-size:12px;
					text-decoration: none;
					text-align:center;
					padding:3px;
				}
				#navigation li li a:hover {
					background:url(images/left_menu_bg.gif) repeat-x;
					border:solid 1px #adb9c2;
				}
			-->
		</style>
	</head>
	
	<body>
		<div  style="height:100%;">
		  <ul id="navigation">
		  <li> <a class="head">CloudCampus</a>
		      <ul>
		        <li><a href="annoucements.php" target="rightFrame">Announcements</a></li>
		      </ul>
		    </li>
		    <li> <a class="head">Post</a>
		      <ul>
		        <li><a href="post_annouce.php" target="rightFrame">Annoucements</a></li>
		      </ul>
		    </li>
			 <li><a class="head">Contacts</a>
		       <ul>
		        <li><a href="bbs_admin.php" target="rightFrame">Clubs</a></li>
		        <li><a href="bbs_admin.php" target="rightFrame">Friends</a></li>
		      </ul>
		    </li>
		    <li> <a class="head">Notifications</a>
		      <ul>
		        <li><a href="bbs_admin.php" target="rightFrame">Messages</a></li>
		        <li><a href="bbs_admin.php" target="rightFrame">Requests</a></li>
		      </ul>
		    </li>
		  </ul>
		</div>
	</body>
</html>