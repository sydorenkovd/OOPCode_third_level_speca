<?php
abstract class HouseAbstract{
		public $model = "";
		public $square;
		public $floors;
  
 function __construct($model, $square = 0, $floors = 1){

			try{
				if(!$model)
			throw new Exception('Ошибка! Укажите модель!');
		}catch(Exception $e){
			echo "Catch";
		}
			$this->model = $model;
			$this->square = $square;
			$this->floors = $floors;
		}
function startProject(){
	echo "Start. Model: {$this->model}<br>";
}
function stopProject(){
	echo "Stop. Model: {$this->model}<br>";
}
// Абстрактный метод
abstract function build();
}

// class A extends HouseAbstract{
// 	function build(){}
// }
// $vasya = new A(1,2,3);

//===============================
//Абстрактный класс Дом, это как в английском 'a house' - ничего конкретного, просто обычный дом
// а например 'the house' - это уже вполне конкретный дом с обязательными прегруженными методами
// и свойствами
class SimpleHouse extends HouseAbstract{
// Свойства абстрактного класса +
public $color = "none";
// Обязательная реализация абстрактного метода
	function build(){
		echo "Build. House: {$this->square}x{$this->floors}<br>";
}
// Свой метод
	function paint(){
		echo "Paint. Color: {$this->color}<br>";
}
}
// Создание простого дома
$simple = new SimpleHouse("A-100-123", 120, 2);
$simple->color = "red";
$simple->startProject();
$simple->build();
$simple->paint();
$simple->stopProject();
//================================
class SuperHouse extends SimpleHouse{
	public $fireplace;
	public $patio;
	function __construct($model, $square, $floors, $fireplace, $patio){
			$this->model = $model;
			$this->square = $square;
			$this->floors = $floors;
			$this->fireplace = $fireplace;
			$this->patio = $patio;
	}
		function fire(){
			if ($this->fireplace)
				echo "Fueled fireplace<br>";
}
}
$super = new SuperHouse("A-100-125", 320, 3, true, true);
$super->color = "green";
$super->startProject();
$super->build();
$super->paint();
$super->fire();
$super->stopProject();
//============================