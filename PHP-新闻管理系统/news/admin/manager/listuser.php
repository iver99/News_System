

<table border=1>
	
<tr>
	<td>���</td>	
	<td>�û���</td>
	<td>����</td>
	<td>ɾ��</td>
</tr>	
<?php
	include_once '../../user/dbConnect/db.php';
	
	$sql="select * from ordinaryuser";
	$result=mysql_query($sql);
	
	while($array=mysql_fetch_array($result))
	{
		echo
			"<tr>
					<td>$array[id]</td>
					<td>$array[username]</td>
					<td>$array[password]</td>
					<td><a href='dealDeleteuser.php?id=$array[id]'>ɾ��</a></td>
			</tr>";
		
	}
	
	
	

?>
	
	
</table>