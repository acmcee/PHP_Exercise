<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<?php
	function __autoload($classname){
		$classpath = $classname.'.class.php';
		if (file_exists($classpath)){
			include_once($classpath);
		}
		else {
			echo '类路径错误呀';
		}
	}
	$myBook = new SportObject('hjgsdgf');
	echo $myBook;
?>