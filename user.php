<?php 

/**Создайте абстрактный класс User который содержит абстрактный метод getRole() который должен выводить роль пользователя, например admin, viewer, moderator и тд.
Создайте классы Admin, Viewer, Moderator, которые наследуют класс User и реализуйте абстрактныей метод getRole() который будет возвращать роль пользователя (подсказка имя класса == имени роли в нижнем регистре).
Так же позаботьтеся о методах которые будут получать и сохранять информацию о пользователе.
Не забудьте о модификаторах доступа, а так же о силе наследования.*/

abstract Class User {
	abstract public function getRole(); 
}

class allUser extends User {
	protected $username;
	protected $data = array();

	public function getRole() {
		return strtolower(get_class($this));
	}

	public function __get($property) {
		if ($property == "username") {
			return $this->username;
		} else {
			if (array_key_exists($property, $this->data)) {
				return $this->data[$property];
			} else {
				return null;
			}
		}
	}

	public function __set($property, $value) {
		if ($property == "username") {
			$this->username = $value;
		} else {
			$this->data[$property] = $value;
		}
	}
}

class Admin extends allUser {}

class Viewer extends allUser {}

class Moderator extends allUser {}

$admin = new Admin;
echo $admin->getRole();
$admin->username = "Vasia";
$admin->location = "Dnipro";
echo $admin->username;
echo $admin->location . "<br>";

$viewer = new Viewer;
echo $viewer->getRole();
$viewer->username = "Masha";
$viewer->location = "Lviv";
echo $viewer->username;
echo $viewer->location . "<br>";

$moderator = new Moderator;
echo $moderator->getRole();
$moderator->username = "Petya";
$moderator->location = "Kiev";
echo $moderator->username;
echo $moderator->location;

 ?>