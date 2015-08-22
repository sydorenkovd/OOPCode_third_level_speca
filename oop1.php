<?php
// class Worker{
// 	public $name;
// // Статическое свойство класса
// public static $workerCount = 0;
// function __construct($name){
// 	if(!$name)
// throw new Exception('Ошибка! Укажите имя рабочего!');
// $this->name = $name;
// echo "Create new worker №" . (self::$workerCount + 1) . " {$this->name}<br>";
// // Изменение статического свойства класса
// ++self::$workerCount;
// }
// 	static function welcome(){
// // Статический метод класса
// // Никаких $this в статическом методе класса!
// echo 'Добро пожаловать на стройплощадку! Нас уже ' . self::$workerCount . "<br>";
// }
// }
// Worker::welcome();
// $w1 = new Worker('Вася Пупкин');
// $w2 = new Worker('Федя Сумкин');
// echo 'Текущее количество рабочих: ' . Worker::$workerCount . "\n";
//============================================
function __autoload($name){
	require "$name.class.php";
}
$obj = new MyClass();