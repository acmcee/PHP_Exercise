<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 20px;
	margin-top: 20px;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ж��ַ���</title>
</head>
<body>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<form method="post" aciton="#">
  <tr>
    <td height="25">������25λ���֣�</td>
    <td><input type="text" name="text" maxlength="25" size="28"></td>
    <td><input type="submit" value="���"></td>
  </tr>
  <tr>
  	<td colspan="3" height="25" align="center" valign="middle">
    <?php
	if($_POST['text'] != ''){
		$number = $_POST['text'];
		if(is_numeric($number) and  strlen($number) <= 25)
			echo '������ȷ��������������ǣ�'.$number;
		else
			echo '�������';
	}
?>
    </td>
  </tr>
</form>
</table>
</body>
</html>
