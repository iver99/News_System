<?php
	session_start();
	include_once "/dbConnect/db.php";
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="select * from adminuser where username='$username' and password='$password'";
	
	$sql1="select * from ordinaryuser where username='$username' and password='$password'";
	$role=$_POST['roleSelect'];
	
	if($role=='普通用户')
	{
		$ordresult=mysql_query($sql1);
		
		$ordnum=mysql_num_rows($ordresult);
		if($ordnum>0)
	{
		$_SESSION['username']=$username;
		echo '普通用户登录成功';
	
		echo "<meta http-equiv=refresh content='0;url=../admin/index2.php'/>";
	}else
	{
		
		echo '用户名或密码不正确';
		echo "<meta http-equiv=refresh content='0,url=../index.php'/>";
	}
		
	}else
	{
		$adminresult=mysql_query($sql);
		
		$adminnum=mysql_num_rows($adminresult);
		if($adminnum>0)
	{
		$_SESSION['username']=$username;
		echo '管理员登录成功';
	
		echo "<meta http-equiv=refresh content='0;url=../admin/index.php'/>";
	}else
	{
		
		echo '用户名或密码不正确';
		echo "<meta http-equiv=refresh content='0,url=../index.php'/>";
	}
	
	}
	
	
	

?>