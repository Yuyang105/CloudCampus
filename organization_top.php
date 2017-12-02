<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Organization Page Navigation</title>
		<style type="text/css">
			<!--
			body {
				margin-left: 0px;
				margin-top: 0px;
				margin-right: 0px;
				margin-bottom: 0px;
			}
			.STYLE1 {
				font-size: 12px;
				color: #000000;
			}
			.STYLE5 {font-size: 12px; }
			.STYLE7 {font-size: 12px; color: #FFFFFF; }
			.STYLE7 a{font-size: 12px; color: #FFFFFF; }
			a img {border:none; }
			-->
		</style>
	</head>
	<body>
		<table width="100%" border="1" cellspacing="0" cellpadding="0">
  		<tr>
   			<td height="50" bgcolor="#99bbbb">
   				<table width="100%" border="0" cellspacing="10" cellpadding="0">
	      			<tr>
	        			<td width="500" height="50"><h1>Cloud Campus</h1></td>
	        			<td width="250" valign="bottom">
	        				<table width="100%" border="0" cellspacing="0" cellpadding="0">
	          					<tr>
	            					<td width="250" bgcolor="#99bbbb">
	            						<table width="100%" border="0" align="center" cellpadding="0" cellspacing="5">
	            							<tr>
	              								<!-- 目前这里还有两个按钮：修改密码，用户信息，需要考虑合适的修改 -->
	                							<td height="20" class="STYLE7"><div align="right"><a href="update_personal_info.php" target="rightFrame">Account Settings</a></div></td>
                                                <td height="20" class="STYLE7"><div align="right"><a href="organization_page.php" target="rightFrame">Organization Page</a></div></td>
                							<td height="20" class="STYLE7"><div align="right"><a href="org-info.php" target="rightFrame">User Info</a></div></td>
	                							<td height="20" class="STYLE7"><div align="right"><a href="login.php?logout=true" target="_parent">Logout</a></div></td>
	             							</tr>
	            						</table>
	            					</td>
	          					</tr>
	       					</table>
	       				</td>
	      			</tr>
    			</table>
    		</td>
  		</tr>
  		<tr>
    		<td height="40" bgcolor="#6E6E6E">
    			<table width="100%" border="0" cellspacing="0" cellpadding="0">
      				<tr>
        				<td>
        					<table width="100%" border="0" cellspacing="10" cellpadding="0">
          						<tr>
            						<td width="35" class="STYLE7"><div align="center"><a href="personal_right.php" target="rightFrame">Home</a></div></td>
            						<td width="35" class="STYLE7"><div align="center"><a href="javascript:history.go(-1);">Back</a></div></td>
            						<td width="35" class="STYLE7"><div align="center"><a href="javascript:history.go(1);">Forward</a></div></td>
            						<td width="35" class="STYLE7"><div align="center"><a href="javascript:window.parent.location.reload();">Refresh</a></div></td>
            						<td width="35" class="STYLE7"><div align="center"><a href="help.php" target="rightFrame">Help</a></div></td>
            						<td>&nbsp;</td>
          						</tr>
        					</table>
        				</td>
        				<td width="250" bgcolor="#6E6E6E">
        					<table width="100%" border="0" cellspacing="0" cellpadding="0">
          						<tr>
            						<td><div align="center"><span class="STYLE7">By <a href="brianstorm_info.php" target="_blank">brainstorm.com</a></span></div></td>
          						</tr>
        					</table>
        				</td>
      				</tr>
    			</table>
    		</td>
  		</tr>
  		<tr>
    		<td height="30" bgcolor="#EEE8AA">
    			<table width="100%" border="0" cellspacing="0" cellpadding="0">
	      			<tr>
	       				<td width="150" bgcolor="#EEE8AA">
	       					<table width="100%" border="0" cellspacing="0" cellpadding="0">
	          					<tr>
	            					<td width="40%">&nbsp;</td>
	            					<td width="30%" height="20" valign="bottom" class="STYLE1">Menu</td>
	            					<td width="30%">&nbsp;</td>
	          					</tr>
	        				</table>
	        			</td>
	        			<td>
	        				<table width="100%" border="0" cellspacing="0" cellpadding="0">
	          					<tr>
	          						<td width="10%">&nbsp;</td>
	            					<td width="90%" height="20" valign="bottom"><span class="STYLE1">
	            					<?php
	            					@session_start();  
            						echo $_SESSION["name"];
            						?>
	            					</span></td>
	           						<td valign="bottom" class="STYLE1"><div align="right"></div></td>
	          					</tr>
	       					</table>
	       				</td>
	      			</tr>
   		 		</table>
   		 	</td>
  		</tr>
		</table>
	</body>
</html>
