<?php

class SampleTest extends Zend_Test_PHPUnit_ControllerTestCase
{

	public function setUp()
	{
		$this->bootstrap = new Zend_Application('testing',
		APPLICATION_PATH."/configs/application.ini");
		parent::setUp();
	}

	public function tearDown() {
		$this->resetRequest();
		$this->resetResponse();
		parent::tearDown();
	}

	public function testRun()
	{
		$this->assertTrue(1==1);
	}

//	public function testAdminUser() {
//		$this->_request->setParam("foo", "bar");
//		$this->dispatch('/test/test1');
//		$this->assertResponseCode('200');
//		$body = $this->getResponse()->getBody();
//		echo $body;
//		$this->assertTrue(stripos($body, "zfkit")!==false);
//	}



}









