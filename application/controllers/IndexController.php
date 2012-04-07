<?php

class IndexController extends Zend_Controller_Action 
{


	public function init()
	{
//		print_r( $this->_helper->_layout);
		$this->view->pageTitle = "main";
	  /* Initialize action controller here */
	}

	public function indexAction()
	{
	}


	public function aboutAction()
	{

//$u->addStatusMessage("3skckw1eg0j4n", "testing");
//$u->update(array("id"=>"3skckw1eg0j4n", "isFeatured"=>true, "isBlocked"=>true));
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


