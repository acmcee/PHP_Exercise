<!DOCTYPE html>
<html>
<meta charset = "utf-8">
<body>
<?php
	$link = mysql_connect("localhost","root","root");
	if (!$link) {die ('can not'.mysql_error());}
	mysql_select_db("test",$link);
	$sql = "INSERT INTO stu (stu_num,stu_name,stu_age)
	VALUES
	($_POST[stu_num],$_POST[stu_name],$_POST[stu_age])";
	if (!mysql_query($sql,$link)) {die ("插入失败".mysql_error());}
	echo "added";

?>
</body>
</html>