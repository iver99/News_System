

<table border=1>
	
<tr>
	<td>ĞòºÅ</td>	
	<td>ÓÃ»§Ãû</td>
	<td>ÃÜÂë</td>
	<td>É¾³ı</td>
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
					<td><a href='dealDeleteuser.php?id=$array[id]'>É¾³ı</a></td>
			</tr>";
		
	}
	
	
	

?>
	
	
</table>