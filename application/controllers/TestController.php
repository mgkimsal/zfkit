<?php

class TestController extends Zend_Controller_Action 
{


	public function init()
	{
	  /* Initialize action controller here */
	}

	public function indexAction(Array $t, Array $x)
	{
	}


	public function test1Action()
	{
		echo microtime()."\n";
		$a = account::findOneByUsername("admin");
echo microtime(true);		echo $a->username;die();
		return;
	}


	public function contactAction()
	{
	}

	public function tosAction()
	{
	}

	public function privacyAction()
	{
	}
}
