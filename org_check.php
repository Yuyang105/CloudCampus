<?php
	if(isset($_POST["Submit"]) && $_POST["Submit"] == "Sign up")
	{
		$user = $_POST["email"];
		$psw = $_POST["password"];
		$psw_confirm = $_POST["psw_confirm"];
        $name = $_POST["name"];
		if($user == "" || $psw == "" || $psw_confirm == "")  
        {  
            //echo "$psw_confirm";
            echo "<script>alert('Please check whether your registration is complete'); history.go(-1);</script>";  
        }  
        else  
        {  
            if($psw == $psw_confirm)  
            {  
$con = mysql_connect("tcss545-aws-db.ce2yjmz6wbyv.us-west-2.rds.amazonaws.com","Yuyang","3350335012");
                if (!$con) {
                    die('Could not connect: ' . mysql_error());
                }
                mysql_select_db("CloudCampusOnAWS");  //选择数据库  
                $sql = "select email from Accounts where email = '$_POST[email]'"; //SQL语句  
                $result = mysql_query($sql, $con);    //执行SQL语句  
                $num = mysql_num_rows($result); //统计执行结果影响的行数  
                if($num)    //如果已经存在该用户  
                {  
                    echo "<script>alert('Sorry, it looks like the email belongs to an existing account.'); history.go(-1);</script>";  
                }  
                else    //不存在当前注册用户名称  
                {  
                    $sql_insert = "INSERT INTO Accounts (Email,Password, Blocked) VALUES ('$_POST[email]','$_POST[password]', '0')";  
                    $res_account = mysql_query($sql_insert, $con);  
                    $num_insert = mysql_num_rows($res_insert);  
                    
                    //---------------!!!-------------------这里可以完善！
                    //-------------------------------------------------
                    $sql_insert = "INSERT INTO Organizations (Email, Name) VALUES ('$_POST[email]', '$_POST[name]')";
                    $res_student = mysql_query($sql_insert, $con);
            		
                    if($res_account && $res_student)  
                    {  
                        echo "<script>alert('Sign up succeeded!'); window.location='index.php';</script>";  
                    }  
                    else  
                    {  
                        echo "<script>alert('System is busy! Please try again later!'); history.go(-1);</script>";  
                    }  
                }  
            }  
            else  
            {  
                echo "<script>alert('Password and Re-entered password do not match!'); history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('Submit Failed'); history.go(-1);</script>";  
    }  
?> 