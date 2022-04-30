<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $user;

	public function testLogin()
	{
		//the line below can be used to check whether setUp runs before each test block.
		//var_dump('1');

		$this->user = new \App\Models\User;

		//the line below shows actual use case of setUp() as repeating the line below for every test is unnecessary.
		$this->assertEquals($this->user->login("Ramisa Maliha",123),"login successful");
	}
}