<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��strnatcmp()����������Ȼ���򡱷������ַ����ıȽ�</title>
</head>

<body>
<?php 
$str1="str2";							//�����ַ�������
$str2="str10";							//�����ַ�������
$str3="mrsoft1";							//�����ַ�������
$str4="MRSOFT2";							//�����ַ�������
echo strcmp($str1,$str2);     					//���ֽڽ��бȽ�,����1
echo strcmp($str3,$str4);     					//���ֽڽ��бȽ�,��1
echo strnatcmp($str1,$str2);  					//��"��Ȼ����"�����бȽ�,����-1
echo strnatcmp($str3,$str4);  					//��"��Ȼ����"�����бȽ�,����1
?>
</body>
</html>