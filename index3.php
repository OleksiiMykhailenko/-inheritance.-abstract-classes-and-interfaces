<?php 

/**
 * абстрактные методы
 */

abstract class BaseAccount {
	public $name;
	public $email;

	public function renderAccount() {
		echo $this->name . '' . $this->email;
	}

	abstract public function createUser($email, $name);
}

class Account extends BaseAccount {
	public function createUser($email, $name) {
		$this->name = $name;
		$this->email = $email;
	}
}

$account = new Account;
echo $account->createUser('vasia@mail.com', 'vasia');

?>