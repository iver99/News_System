<?php
	include_once '../../user/dbConnect/db.php';
	
	$id=$_GET['id'];
	$sql="delete from news where id=$id";
	
	$result=mysql_query($sql);
	if($result!=false)
	{
		echo 'ɾ���ɹ�';
	}else
	{
		echo 'ɾ��ʧ��';
	}
	

?>