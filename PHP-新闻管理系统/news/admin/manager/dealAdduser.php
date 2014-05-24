<?php
	include_once '../../user/dbConnect/db.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="insert into ordinaryuser values('','$username','$password')";
	
	$result=mysql_query($sql);
	
	if($result !=false)
	{
		echo '添加用户成功';
	}
	else
	{
		echo '添加用户失败';
	}
	
	
	


?>