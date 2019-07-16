<?php 

/**
 * используем примитивы для того, чтобы определить коробки(круг, квадрат)в фигуры, а примитивы(точка, линия) в примитивы.
 */

interface Figures {

}

interface Primitives {

}

class Box implements Figures {}
class Circle implements Figures {}
class Point implements Primitives {}
class Line implements Primitives {}

$box = new Box();
$circle = new Circle();
$point = new Point();
$line = new Line();

$mixed = [$box, $circle, $point, $line];

foreach ($mixed as $something) {
	if ($something instanceof Primitives) {
	$primitives[] = $something;
	}

	if ($something instanceof Figures) {
	$figures[] = $something;
	}
}

//$primitives = [];
//$figures = [];


var_dump($primitives);
var_dump($figures);





 ?>