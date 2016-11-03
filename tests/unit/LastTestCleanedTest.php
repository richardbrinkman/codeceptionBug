<?php
	class LastTestCleanedTest extends \Codeception\Test\Unit {
	/**
	* @var \UnitTester
	*/
	protected $tester;

	public function testHaveInDatabase() {
		$this->tester->haveInDatabase('users', ['username' => 'John', 'email' => null]);
		$this->tester->seeInDatabase('users', ['email' => null]);
	}
}
