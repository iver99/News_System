<html>
	<center>
	<b><h2>增加新用户</h2></b><br/>
	<form action="dealAdduser.php" method="post">
		用户名:&nbsp&nbsp&nbsp&nbsp<input type="text" name="username" id="username"><br/>
		密码:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="password" 			        										 id="password"><br/>
		再输入一次密码:<input type="password" name="password1" id="password1"><br/>
		<input type="submit" value="注册" onclick=" return check1()">
				
		</form>
	
		</center>
	<script language="javascript" type="text/javascript">
				
		function check1()
		{
			var user=document.getElementById("username").value;
			var pass=document.getElementById("password").value;
			var pass1=document.getElementById("password1").value;
			if(user=="" || pass=="")
			{
				alert("用户名或密码不能为空");
				return false;
			}
	
			if(pass.length<6)
			{
				alert("密码不能少于6位");
				return false;
				
			}
			if(pass != pass1)
			{
				alert("两次输入的密码不一样，请重新输入");
				return false;
			}
		}
		
		return true;
	</script>
</html>