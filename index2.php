<?php 

/**
 * пример наследования номер два по проще
 */

class BaseAccount {
	public $name;
	public $email;

	public function renderAccount() {
		return $this->name . '' . $this->email;
	}
}

class StudetsAccount extends BaseAccount {

	public function setAndRenderAccount($email, $name) {
		$this->name = $name;
		$this->email = $email;
		return $this->renderAccount();
	}
}

class TeacherAccount extends BaseAccount {

	public function setAndRenderAccount($email, $name) {
		$this->name = $name;
		$this->email = $email;
		return $this->renderAccount();
	}
}

class AdminAccount extends BaseAccount {

	public function setAndRenderAccount($email, $name) {
		$this->name = $name;
		$this->email = $email;
		return $this->renderAccount();
	}
}

$sa = new StudetsAccount();
echo $sa->setAndRenderAccount('vasia@mail.com', 'vasia');

$ta = new TeacherAccount();
echo $ta->setAndRenderAccount('teacher@mail.com', 'teacher');

$ad = new AdminAccount();
echo $ad->setAndRenderAccount('admin@mail.com', 'admin');

?>