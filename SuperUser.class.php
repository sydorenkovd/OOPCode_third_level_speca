<?php
class SuperUser extends User{
	public $role;
	public static $SuperUserCount = 0;
	function __construct($name, $login, $password, $role){
		parent::__construct($name, $login, $password);
		$this->role = $role;
		++self::$SuperUserCount;
	}
	function showInfo(){
		echo parent::showInfo();
		echo "<br>Это новое значение: {$this->role}<br>";
		
}
}