<center>
<table border=1>
	
	<tr>
		<td>��� &nbsp&nbsp&nbsp</td>	
		<td>���� &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td>�޸�&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td>ɾ��&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	</tr>	
	
<?php
	include_once("../../user/dbConnect/db.php");
	
		
	$sql="select * from news";
	$result=mysql_query($sql);
	$amount=mysql_num_rows($result);  //���ݿ��еļ�¼����
	
	$page=$_GET['page'];
	
	$pageSize=4;							//ҳ���С
	$totalPage=ceil($amount/$pageSize);   	//��ҳ��
	if(! isset($page))
	{
		$page=1;
	}
	$startCount=($page-1)*$pageSize;        //���ò�ѯ����ʼλ��
	$sql1="select * from news limit $startCount,$pageSize";
	$result1=mysql_query($sql1);
	
	while($array=mysql_fetch_array($result1))
	{
		echo
			"<tr>
				<td>$array[id]</td>
				<td>$array[title]</td>
				<td><a href='modifynews.php?id=$array[id]'>�޸�</td>
				<td><a href='dealDeletenews.php?id=$array[id]'>ɾ��</a></td>		
			</tr>"	;
		
	}
	if($page!=1)
	{
?>
<br/>
<a href="listnews.php?page=<?php echo $page-1; ?>">��һҳ</a>

<?php
	}
	for($i=1;$i<=$totalPage;$i++)
	{
?>
<a href="listnews.php?page=<?php echo $i;  ?>"><?php echo $i; ?></a>		
<?php
	}
	if($page<$totalPage)
	{
?>
<a href="listnews.php?page=<?php echo $page+1; ?>">��һҳ</a>
<?php
	}

?>
</table>
</center>