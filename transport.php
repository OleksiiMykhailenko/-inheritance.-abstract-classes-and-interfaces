<?php 

/**
 * Спроектируйте классы и интерфейсы, которые будут описывать транспортные средства. Например:
а) автомобиль движется за счет мотора, имеет 4 колеса
б) велосипед использует мускульную силу, имеет два колеса
в) танк движется за счет мотора, имеет две гусеницы и умеет стрелять
В итоге вызов вашего класса может иметь следующий вызов.
$car = new Car();
echo $car->getWheelCount(); //вернет количество колес
echo $car->getDoorsCount(); // вернет количество дверей
echo $car->getMotorType(); // вернет тип двигателя: мотор или мускулы
echo $car->accelerate(10); // установить скорость 10 км/ч
echo $car->decelerate(5); // уменьшить скорость до 5 км/ч

$bike = new Bike();
echo $bike->getWheelCount(); //вернет количество колес
echo $bike->getMotorType(); // вернет тип двигателя: мотор или мускулы
echo $bike->accelerate(10); // установить скорость 10 км/ч
echo $bike->decelerate(5); // уменьшить скорость до 5 км/ч

$tank = new Tank();
echo $tank->getСaterpillar(); //вернет количество траков гусеницы
echo $tank->getMotorType(); // вернет тип двигателя: мотор или мускулы
echo $tank->accelerate(10); // установить скорость 10 км/ч
echo $tank->decelerate(5); // уменьшить скорость до 5 км/ч
echo $tank->fire(); // сделать выстрел, "Бах"
 */

 class Vehicle {

 	protected $start_speed;
 	protected $motor_type;

 	public function __construct($start_speed, $motor_type) {
 		$this->start_speed = $start_speed;
 		$this->motor_type = $motor_type;
 	}

 	public function accelerate($value) {
 		$this->start_speed += $value;
 		return 'Yor speed:' . $this->start_speed; 
 	}

 	public function decelerate($value) {
 		$this->start_speed -= $value;
 		if ($this->start_speed < 0) {
 			$this->start_speed = 0;
 		}
 		return 'Your new speed:' . $this->start_speed;
 	}

 	public function getMotorType() {
 		return $this->motor_type;
 	}
}

interface wheelCount {
	public function getWheelCount();
}

interface doorCount {
	public function getDoorsCount();
}

interface caterpillar {
	public function getCaterpillar();
}

interface fire {
	public function getFire();
}

class Car extends Vehicle implements wheelCount, doorCount {
	
	private $wheels_count;
	private $doors_count;

	public function __construct($start_speed, $motor_type, $wheels_count, $doors_count) {
		parent::__construct($start_speed, $motor_type);
		$this->wheels_count = $wheels_count;
		$this->doors_count = $doors_count;
	}

	public function getWheelCount() {
		return $this->wheels_count;
	}

	public function getDoorsCount() {
		return $this->doors_count;
	}
} 

class Bike extends Vehicle implements wheelCount {

	private $wheels_count;

	public function __construct($start_speed, $motor_type, $wheels_count) {
		parent::__construct($start_speed, $motor_type);
		$this->wheels_count = $wheels_count;
	}

	public function getWheelCount() {
		return $this->wheels_count;
	}
}

class Tank extends Vehicle implements caterpillar, fire {

	private $caterpillar_count;

	public function __construct($start_speed, $motor_type, $caterpillar_count) {
		parent::__construct($start_speed, $motor_type);
		$this->caterpillar_count = $caterpillar_count;
	}

	public function getCaterpillar() {
		return $this->caterpillar_count;
	}

	public function getFire() {
		return "Бах!";
	}
}

$car = new Car(0, 'motor', 4, 4);
echo $car->getWheelCount() . "<br>";
echo $car->getDoorsCount() . "<br>";
echo $car->getMotorType() . "<br>";
echo $car->accelerate(10) . "<br>";
echo $car->decelerate(5) . "<br>";

$bike = new Bike(0, 'muscles', 2);
echo $bike->getWheelCount() . "<br>";
echo $bike->getMotorType() . "<br>";
echo $bike->accelerate(10) . "<br>";
echo $bike->decelerate(5) . "<br>"; 

$tank = new Tank(0, 'motor', 194);
echo $tank->getCaterpillar() . "<br>";
echo $tank->getMotorType() . "<br>";
echo $tank->accelerate(10) . "<br>";
echo $tank->decelerate(5) . "<br>";
echo $tank->getFire();

 ?>