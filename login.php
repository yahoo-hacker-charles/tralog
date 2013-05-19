<?php	
@session_start();
if(isset($_POST['submit'])){
	
	//登录
	include_once("utils/ConnDB.php");
	$username = $_POST['username'];
	$password = $_POST['passward'];
	
	$query="select u.user_id,u.user_name,u.user_count  from shop_users  as u where user_name='$username' and user_pwd='$password' and user_type !=0";
	$result=mysql_query($query) or die("查询登陆信息失败");
	$row =mysql_fetch_row($result) ;		
			if ($row[0]!="") {
				$_SESSION['user']=array("user_id"=>$row[0],"user_name"=>$row[1]);
				$count = $row[2]+1;
				$countsql = "update shop_users set user_count= $count where user_id = ".$row[0];
				mysql_query($countsql);				
				include("logined.php");
				exit;
			}else{
				echo "<script> alert('登录失败，请检查用户名称与密码是否正确或者该用户有非法记录账号被封！');</script>";
					
		}	
}
?>