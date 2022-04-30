<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $user;

	public function testLogin()
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->user = new \App\Models\assign_student;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		$this->assertEquals($this->user->login("CSE 2022","Ramisa Maliha",20201176),"assigned successful");
	}
}