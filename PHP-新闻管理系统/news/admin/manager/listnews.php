<center>
<table border=1>
	
	<tr>
		<td>序号 &nbsp&nbsp&nbsp</td>	
		<td>标题 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td>修改&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		<td>删除&nbsp&nbsp&nbsp&nbsp&nbsp</td>
	</tr>	
	
<?php
	include_once("../../user/dbConnect/db.php");
	
		
	$sql="select * from news";
	$result=mysql_query($sql);
	$amount=mysql_num_rows($result);  //数据库中的记录总数
	
	$page=$_GET['page'];
	
	$pageSize=4;							//页面大小
	$totalPage=ceil($amount/$pageSize);   	//总页数
	if(! isset($page))
	{
		$page=1;
	}
	$startCount=($page-1)*$pageSize;        //设置查询的起始位置
	$sql1="select * from news limit $startCount,$pageSize";
	$result1=mysql_query($sql1);
	
	while($array=mysql_fetch_array($result1))
	{
		echo
			"<tr>
				<td>$array[id]</td>
				<td>$array[title]</td>
				<td><a href='modifynews.php?id=$array[id]'>修改</td>
				<td><a href='dealDeletenews.php?id=$array[id]'>删除</a></td>		
			</tr>"	;
		
	}
	if($page!=1)
	{
?>
<br/>
<a href="listnews.php?page=<?php echo $page-1; ?>">上一页</a>

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
<a href="listnews.php?page=<?php echo $page+1; ?>">下一页</a>
<?php
	}

?>
</table>
</center>