<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>变量间的赋值</title>
</head>
<body>
<?php
$string1 = "spcn";				//声明变量$string1
$string2 = $string1;			//使用$string1来初始化$string2
$string1 = "zhuding";			//改变变量$string1的值
echo $string2;					//输出变量$string2的值
?>
</body>
</html>
