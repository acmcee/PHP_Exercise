<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
class sportObject{
	function beatbasketball($name,$height,$point,$age,$sex){
	if($height>=180 and $point>=80){
		return $name."身高为".$height."，得分为".$point.",符合打篮球要求";
	}
	else {
		return $name."身高为".$height."，得分为".$point.",不符合打篮球要求";
		}
	}
} 

$sportA = new sportObject;
echo $sportA->beatbasketball('小明','185','90','20','男');
echo "<br>";
echo $sportA->beatbasketball('小但','175','90','20','男');
echo "<br>";
echo $sportA->beatbasketball('小四','185','70','20','男');
echo "<br>";
?>