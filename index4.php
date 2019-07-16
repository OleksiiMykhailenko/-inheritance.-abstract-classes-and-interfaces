<?php 

/**
 * полиморфизм на примере с геометрическими фигурами
 */

abstract class Figure {
	abstract public function calcSquare();
}

class Box extends Figure {
	private $side;

	public function __construct($side) {
		$this->side = $side;
	}

	public function calcSquare() {
		return $this->side * $this->side / 2;
	}
}

class Rectangle extends Figure {
	private $lenght;
	private $width;

	public function __construct($lenght, $width) {
		$this->lenght = $lenght;
		$this->width = $width;
	}

	public function calcSquare() {
		return $this->lenght * $this->width;
	}
}

class Circle extends Figure {
	private $radius;
	const PI = 3.14;
	

	public function __construct($radius) {
		$this->radius = $radius;
		//$this->PI = PI;
	}

	public function calcSquare() {
		return $this->radius * self::PI * 2;
	}
}

$box = new Box(5);
echo $box->calcSquare();

$rec = new Rectangle(10, 5);
echo $rec->calcSquare();

$ci = new Circle(10);
echo $ci->calcSquare();

?>