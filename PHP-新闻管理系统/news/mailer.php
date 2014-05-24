<?php
	if(isset($_POST['submit']))
	{
		require("class.phpmailer.php");
		
		$from=$_POST['from'];
		//$to=$_POST['to'];
		$subject=$_POST['subject'];
		$send_body=$_POST['send_body'];
		
		$smtp='smtp.163.com';
	
		
		$mail=new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth=true;

		$mail->Host=$smtp;
			
		$mail->Username="rj10210a03@163.com"; //smtp的用户名和密码
		$mail->Password="123456789";
		
		$mail->From=$from;//设置发送人
		
		$mail->FromName=$from;
		
		$mail->Subject=$subject;
		$mail->Body=$send_body;
		
		$mail->IsHTML(true);
		$mail->AddAddress("rj10210a03@163.com");//收件人
		
		if(!$mail->Send())
		{
			echo "发送错误：".$mail->ErrorInfo;
			}else
			{
				echo "<div align=center>邮件发送防成功，请注意查收!</div>";
		}
		die();
		
		
	}

?>
<center>
<br/>
<h1>有什么意见请联系我们</h1>
<br/><br/>
<form id="form1" name="form1" method="post" action="">
	<table border="0" cellspacing="0" cellpadding="2">
		<tr>
			<td align="right">收件人:</td>
			<td><input type="text" name="to" id="to" value="rj10210a03@163.com" disabled="disabled"="true"></td>
		</tr>	
		<tr>
			<td align="right">主题:</td>
			<td><input type="text" name="subject" id="subject"></td>
		</tr>
		<tr>
			<td align="right">内容</td>
			<td><textarea name="send_body" id="send_body" cols="45" rows="5"></textarea></td>
		</tr>
		<tr>
			<td align="right">来自:</td>	
			<td><input type="text" name="from" id="from"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" id="submit" value="提交"></td>
		</tr>
		
		</table>	
		
</form>
</center>