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
			
		$mail->Username="rj10210a03@163.com"; //smtp���û���������
		$mail->Password="123456789";
		
		$mail->From=$from;//���÷�����
		
		$mail->FromName=$from;
		
		$mail->Subject=$subject;
		$mail->Body=$send_body;
		
		$mail->IsHTML(true);
		$mail->AddAddress("rj10210a03@163.com");//�ռ���
		
		if(!$mail->Send())
		{
			echo "���ʹ���".$mail->ErrorInfo;
			}else
			{
				echo "<div align=center>�ʼ����ͷ��ɹ�����ע�����!</div>";
		}
		die();
		
		
	}

?>
<center>
<br/>
<h1>��ʲô�������ϵ����</h1>
<br/><br/>
<form id="form1" name="form1" method="post" action="">
	<table border="0" cellspacing="0" cellpadding="2">
		<tr>
			<td align="right">�ռ���:</td>
			<td><input type="text" name="to" id="to" value="rj10210a03@163.com" disabled="disabled"="true"></td>
		</tr>	
		<tr>
			<td align="right">����:</td>
			<td><input type="text" name="subject" id="subject"></td>
		</tr>
		<tr>
			<td align="right">����</td>
			<td><textarea name="send_body" id="send_body" cols="45" rows="5"></textarea></td>
		</tr>
		<tr>
			<td align="right">����:</td>	
			<td><input type="text" name="from" id="from"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" id="submit" value="�ύ"></td>
		</tr>
		
		</table>	
		
</form>
</center>