<?php
function __autoload($name){
	require "$name.class.php";
}
$user1 = new User("Vasya", "Vasya1", "1213");
$user2 = new User("Petya", "Petyaq", "123");
$user3 = new User("Gena", "Crockodyle", "Cheburashka");
echo $user1->showInfo(), "<br>";
echo $user2->showInfo(), "<br>";
echo $user3->showInfo(), "<br>";



$user = new SuperUser("Vasya Pupkin", "VS", "12312", "Man");
$user->showInfo();
echo "<hr>Всего обычных пользователей: " . User::$userCount . "<br>";
echo "<hr>Всего супер-пользователей: " . SuperUser::$SuperUserCount . "<br><hr>";
// class UserAbstract{
	
// 	function __construct(){
		
// 	}
// 	function showInfo();
// }
// class User extends UserAbstract{
// 	function showInfo(){
// 		echo parent::showInfo();
		
// 	}
// }
// interface LSuperUser{
// 	function getInfo();
// }
// class SuperUser implements LSuperUser{
// 	function getInfo(){
// 		echo parent::showInfo();
// 		echo "Method interface";
// 	}
// }
