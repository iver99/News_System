<?php
	include_once '../../user/dbConnect/db.php';
	$id=$_GET['id'];
	//echo $id;
	$sql="select * from news where id=$id";
	
	$result=mysql_query($sql);
	
	$array=mysql_fetch_array($result);
	$title=$array['title'];
	$content=$array['content'];
	$id=$array['id'];
	

?>
<html>
	<head><title>�������</title></head>	
	<body>
		<center>
			<h2>�������</h2>
			<form action="dealModifynews.php?id=<?php echo $id; ?>" method="post">
				����<br/>
				<input type="text" name="title" value=<?php echo $title;  ?>><br/>
				����<br>
				<textarea name="content" cols ="70" rows = "25" ><?php echo $content; ?></textarea><br/>
						<input type="submit" value="�޸�">
			</form>	
								
			</center>	
	
	</body>

</html>
