<?php
	header("Content-type:text/html;charset=gbk");
	include_once '../../user/dbConnect/db.php';
			  
		$title=$_POST['title'];
		$content=$_POST['content'];
	
		$sql="insert into news values('','$title','$content')";
		
		$result=mysql_query($sql)
		;
		if($result !=null)
		{
			echo '�������ųɹ�';
		}else{
			
			echo '����ʧ��';
		}
		
		mysql_close();
		
	



?>