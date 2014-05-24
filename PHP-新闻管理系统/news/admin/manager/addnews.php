<?php

include_once '../../user/dbConnect/db.php';
?>
<html>
	<head><title>添加新闻</title></head>	
	<body>
		<center>
			<h2>添加新闻</h2>
			<form action="dealAddnews.php" method="post">
				标题<br/>
				<input type="text" name="title"><br/>
				内容<br>
				<textarea name="content" cols ="70" rows = "25"></textarea><br/>
						<input type="submit" value="提交">
				
				
			</form>	
			
			
		</center>	
		
		
		
	</body>
	
	
</html>