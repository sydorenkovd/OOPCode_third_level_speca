<?php
// programm about car
// Интерфейс это абстракция, еще абстрактней той абстракции ААААААААААА!)
interface Car{
	function startEngine();
	function stopEngine();
	function start();
	function stop();
}
//В конструктор приходит некий автомобиль, который будет реализовывать интерфейс Car
class Route{
	$car;
	function __construct(Car $car){
		$this->car = $car;
	}
	function drive(){
		$this->car->startEngine();
		$this->car->start();
		if("На перекрестке красный свет")
		$this->car->stop();
	while("Загорится зеленый")
		$this->car->start();
	}
}