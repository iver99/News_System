<?php
include_once '../../user/dbConnect/db.php';
	$id=$_GET['id'];
	$sql="delete from ordinaryuser where id=$id";
	
	$result=mysql_query($sql);
	
	if($result!=false)
	{
		echo 'É¾³ý³É¹¦';
		
	}else
	{
		echo mysql_error();
		echo 'É¾³ýÊ§°Ü';
	}
	
	


?>