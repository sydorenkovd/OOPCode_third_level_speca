<?php
// Интерфейс тоже самое, что и абстрактный класс только в нем
// могут быть ТОЛЬКО абстрактные методы и константы.
// интерфейсы не наследуются, а реализуються, так нызываемый наюросок чертежа
// 
interface Db{ 
	function connect();
	function close();
}
// abstract class Db{
// 	abstract function connect();
// 	abstract function close();
// }

// пример РЕАЛИЗАЦИИ(наследования) интерфейса

//Пословицы: ОДИН ИНТЕРФЕЙС - 100 РЕАЛИЗАЦИЙ
// 2. ПРОГРАММИРУЙТЕ НА УРОВНЕ ИНТЕРФЕЙСОВ = РЕАЛИЗУЙТЕ НА УРОВНЕ КЛАССОВ
class A implements Db{
	function connect(){};
	function close(){};
}
$a = new A();
class Azure{
	function set(Db $obj){
		$obj->connect();
	}
}