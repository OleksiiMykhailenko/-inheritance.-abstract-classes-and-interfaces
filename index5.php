<?php 

/**
 * реализуем наследование конструктора
 */

class BaseMailer {
	private $to;

	public function __construct($to) {
		$this->to = $to;
	}

	public function send() {
		return $this->to;
	}
}

class GmailMailer extends BaseMailer {
	public function __construct($to) {
		parent::__construct($to);
		$this->send();
	}
}

$gm = new GmailMailer('vasia@mail.com');
echo $gm->send();







 ?>