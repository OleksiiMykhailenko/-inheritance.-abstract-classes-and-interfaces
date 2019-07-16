<?php 

/**
 * пример наследования используя в первом случае конструктор, во втором
 гетеры и сетеры
 */

class BaseValidator {

	protected function validate($value1, $value2, $rule) {
		switch ($rule) {
			case 'eq';
			return $value1 == $value2;
			case 'less';
			return $value < $value2;
			case 'greated';
			return $value > $value2;
		}
	}
}

class IntValidator extends BaseValidator {
	
	private $value1;
	private $value2;

	public function __construct($value1, $value2) {
		$this->value1 = $value1;
		$this->value2 = $value2;
	}

	public function checkValues($rule) {
		return $this->validate($this->value1, $this->value2, $rule);
	}
}

class StringValidator extends BaseValidator {

	private $value1;
	private $value2;

	public function getValue1() {
		return $this->value1;
	}

	public function setValue1($value1) {
		$this->value1 = $value1;
		return $this;
	}

	public function getValue2() {
		return $this->value2;
	}

	public function setValue2($value2) {
		$this->value2 = $value2;
		return $this;
	}

	public function checkValues($rule) {
		return $this->validate($this->value1, $this->value2, $rule);
	}
}

$ntValidator = new IntValidator(5, 10);
var_dump($ntValidator->checkValues('eq'));

$stringValidator = new StringValidator();
$stringValidator->setValue1('ab')
->setValue2('bc');
var_dump($stringValidator->checkValues('eq'));

?>