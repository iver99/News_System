<?php
	session_start();
	include_once "/dbConnect/db.php";
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="select * from adminuser where username='$username' and password='$password'";
	
	$sql1="select * from ordinaryuser where username='$username' and password='$password'";
	$role=$_POST['roleSelect'];
	
	if($role=='��ͨ�û�')
	{
		$ordresult=mysql_query($sql1);
		
		$ordnum=mysql_num_rows($ordresult);
		if($ordnum>0)
	{
		$_SESSION['username']=$username;
		echo '��ͨ�û���¼�ɹ�';
	
		echo "<meta http-equiv=refresh content='0;url=../admin/index2.php'/>";
	}else
	{
		
		echo '�û��������벻��ȷ';
		echo "<meta http-equiv=refresh content='0,url=../index.php'/>";
	}
		
	}else
	{
		$adminresult=mysql_query($sql);
		
		$adminnum=mysql_num_rows($adminresult);
		if($adminnum>0)
	{
		$_SESSION['username']=$username;
		echo '����Ա��¼�ɹ�';
	
		echo "<meta http-equiv=refresh content='0;url=../admin/index.php'/>";
	}else
	{
		
		echo '�û��������벻��ȷ';
		echo "<meta http-equiv=refresh content='0,url=../index.php'/>";
	}
	
	}
	
	
	

?>