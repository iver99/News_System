<?php
include_once '../../user/dbConnect/db.php';

	$title=$_POST['title'];
	$content=$_POST['content'];
	$id=$_GET['id'];
	$sql="update news set title='$title',content='$content' where id=$id";
	
	$result=mysql_query($sql);
	if(!$result)
	{
		echo '�޸�ʧ��';
		mysql_error();1
	}
	else
		echo '�޸ĳɹ�';

?>