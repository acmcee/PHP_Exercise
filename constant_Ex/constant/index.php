<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
	class SportObject{
		private $Style = '';
		function __get($name){
			if(isset($this->$name)){
				echo '变量'.$name.'的值为'.$this->$name.'<br>';
			}
			else {
				echo '变量'.$name.'的值未定义，初始化为0'.'<br>';
			}
		}
		function __set($name,$value){
			if (isset($this->$name)){
				$this->$name = $value;
				echo '变量'.$name.'赋值为'.$value.'<br>';
			}
			else {
				$this->$name = $value;
				echo '变量'.$name.'被初始化为'.$value.'<br>';
			}
		}
	}
	$MyComputer = new SportObject;
	$MyComputer ->type = 'DIY';
	$MyComputer ->type;
	$MyComputer ->name;
?>