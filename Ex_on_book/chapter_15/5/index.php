<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Mcrypt库支持的加密算法与加密模式</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<?php
	$en_dir = mcrypt_list_algorithms();
	echo "Mcrypt支持的算法有：";
	foreach($en_dir as $en_value){
		echo $en_value." ";
}
?>
<?php
	$mo_dir = mcrypt_list_modes();
	echo "<p>Mcrypt支持的加密模式有：";
	foreach($mo_dir as $mo_value){
		echo $mo_value." ";
}
?>
</body>
</html>
