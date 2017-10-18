<?php
class User {
	public $name = '';
	public $userId = '';

	public function toArray() 
	{
		return array(
			//"name" => $this->name,
			"userId"  => $this->userId
		);
	}
}