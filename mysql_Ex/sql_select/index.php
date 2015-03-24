<!DOCTYPE html>
<html>
<meta charset = "utf-8">
<body>
<?php
	$link = mysql_connect("localhost","root","root")or die ("无法连接到数据库".mysql_error());
	mysql_query("SET NAMES utf8"); 
	mysql_query("SET CHARACTER SET utf8"); 
	mysql_query("SET COLLATION_CONNECTION='utf8_general_ci'");
	$db_select = mysql_select_db("test",$link);
	if ($db_select){echo "选择成功".'<br/>';}
	$sql = mysql_query("select * from stu ",$link);
	
	$result = mysql_fetch_array($sql);
	echo "stu_num"." "."stu_name".'<br/>';
	do {
		echo $result['stu_num'].".";
		echo $result['stu_name'].'<br/>';
	}while($result = mysql_fetch_array($sql));
?>
</body>
</html>