<?php
class UserManager {
	public $users = array();
	private $file_name = "user.json";
	function __construct() {
		$this->readUser();
	}

	public function addUser($user) {
		if(!isset($this->users[$user->userId])) {
			$this->users[$user->userId] = 1;
			$this->writeUser();
		} else {
			echo 'key duplicate';
		}
	}

	private function readUser() {
		$this->users = json_decode(file_get_contents($this->file_name), true);

	}

	public function writeUser() {
		file_put_contents($this->file_name, json_encode($this->users));
	}
}