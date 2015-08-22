<?php
class SimpleHouse{
	public $model = "";
	public $square = 0;
	public $floors = 0;
	public $color = "none";

	function __construct($model, $square = 0, $floors = 1){
		$this->model = $model;
		$this->square = $square;
		$this->floors = $floors;
	}
	function startProject(){
		echo "Start. Model: {$this->model}<br>";
	}
	function stopProject(){
		echo "Stop. Model: {$this->model}<hr>";
	}
	function build(){
		echo "Build house: {$this->square}*{$this->floors} <br>";
	}
	function paint(){
		echo "Paint color: {$this->color} <br>";
	}
}
//Создание простого дома
$simple = new SimpleHouse("A-100-123", 120, 2);
$simple->color = "red";
$simple->startProject();
$simple->build();
$simple->paint();
$simple->stopProject();
// Создание класса наследника
class SuperHouse extends SimpleHouse{
	public $fireplace = true;
	public $patio = true;

	function fire(){
		if($this->fireplace)
			echo "Fueled fireplace", "<br>";
	}
}
$super = new SuperHouse("A-100-125", 320, 3);
$super->color = "green";
$super->startProject();
$super->build();
$super->paint();
$super->fire();
$super->stopProject();
//Сщздание класса наследника
class FabricHouse extends SimpleHouse{
	function build(){
		// Перегрузка метода
		echo "Build fabric: {$this->square}*{$this->floors} <br>";
	}
}
$fabric = new FabricHouse("B-200-225", 3220, 5);
$fabric->color = "white";
$fabric->startProject();
$fabric->build();
$fabric->paint();
$fabric->stopProject();

class SuperFabricHouse extends FabricHouse{
	function build(){
		echo "====================================<br>";
		echo parent::build();
		echo "====================================<br>";
	}
}
$super_fabric = new SuperFabricHouse("C-201-285", 5220, 7);
$super_fabric->color = "black";
$super_fabric->startProject();
$super_fabric->build();
$super_fabric->paint();
$super_fabric->stopProject();