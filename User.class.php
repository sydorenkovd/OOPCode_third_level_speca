<?php
class User{
	public $name;
	public $login;
	public $password = "12345";
	public static $userCount = 0;
	function __construct($name, $login, $password){
		$this->name = $name;
		$this->login = $login;
		$this->password = $password;
		++self::$userCount;
	}
	function showInfo(){
		echo "<hr>" . "Name: " . $this->name, "<br>";
		echo "Login: " . $this->login, "<br>";
		echo "Password: " . $this->password;
	}
	function __destruct(){
		echo "User $this->login deleted", "<br>";
	}
}
