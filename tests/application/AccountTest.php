<?php

class AccountTest extends Zend_Test_PHPUnit_ControllerTestCase
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
		$a = R::dispense("account");
		$a->username = "user1";
		R::store($a);
		$a2 = R::dispense("account");
		$a2->username = "user2";
		R::store($a2);
		$company = R::dispense("company");
		$company->name = "company 1";
		R::store($company);

		$a->company = $company;
		R::store($a);

		$c1 = $a->addCircle("circle1");
		$c2 = $a->addCircle("circle2");

		/** @var $a Models_Account */
		$a = R::load("account", $a->id);
//		$this->assertTrue($a->id==1);

		/** @var $g Models_circle */
		$g = R::load("circle", $c1->id);
		$g->addAccount($a);
		$circles = $a->getCircles();
		$this->assertTrue(count($circles)==2);

		$g->addAccount($a);
		$circles = $a->getCircles();
		$this->assertTrue(count($circles)==2);

		$g->removeAccount($a);
		$circles = $a->getCircles();
		$this->assertTrue(count($circles)==1);

	}


	public function testCompanyRun()
	{
		$a = R::dispense("account");
		$a->username = "user1";
		R::store($a);
		$a2 = R::dispense("account");
		$a2->username = "user2";
		R::store($a2);
		$company = R::dispense("company");
		$company->name = "company 1";
		R::store($company);

		/** @var $a Models_Account */
		$a = R::load("account", 1);
		$this->assertTrue($a->id==1);

		/** @var $g Models_company */
		$g = R::load("company", 1);
		$g->addAccount($a);
		$c = $a->getCompany();
		$this->assertTrue($company->name == "company 1");
	}


	public function testProjectRun()
	{
		$a = R::dispense("account");
		$a->username = "user1";
		R::store($a);
		$company = R::dispense("company");
		$company->name = "company 1";
		R::store($company);

		/** @var $a Models_Account */
		$a = R::load("account", 1);
		$this->assertTrue($a->id==1);

		/** @var $g Models_company */
		$g = R::load("company", 1);
		$g->addAccount($a);

		$project = $a->addProject("test project");
		$project2 = $a->addProject("test project 2");
		$projectList=  $a->getActiveProjects();
		$this->assertTrue(count($projectList)==2);
	}

}









