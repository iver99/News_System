<html>
	<center>
	<b><h2>�������û�</h2></b><br/>
	<form action="dealAdduser.php" method="post">
		�û���:&nbsp&nbsp&nbsp&nbsp<input type="text" name="username" id="username"><br/>
		����:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="password" 			        										 id="password"><br/>
		������һ������:<input type="password" name="password1" id="password1"><br/>
		<input type="submit" value="ע��" onclick=" return check1()">
				
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
				alert("�û��������벻��Ϊ��");
				return false;
			}
	
			if(pass.length<6)
			{
				alert("���벻������6λ");
				return false;
				
			}
			if(pass != pass1)
			{
				alert("������������벻һ��������������");
				return false;
			}
		}
		
		return true;
	</script>
</html>