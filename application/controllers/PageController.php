<?php

class PageController extends Zend_Controller_Action
{


	public function init()
	{
        $this->_helper->_layout->setLayout("interior");
//		print_r( $this->_helper->_layout);
//		$this->view->pageTitle = "main";
	  /* Initialize action controller here */
    		$u = Zend_Registry::get("session")->user;
		if($u!=null){
//			$this->_redirect("project");
		}
	}

	public function addaprojectAction() { }
    public function examplesAction() {
        $this->view->title = "How can Field Flag help mobile data collection projects - Field Flag mobile GPS data capture";
    }

    public function instructionsAction() { }
    public function aboutAction() {
        $this->view->title = "Mobile data collection project platform - Field Flag mobile GPS data capture";
    }
    public function deployAction() { }
    public function editdataformAction() { }
    public function createdataformAction() { }
    public function collectdataAction() { }
    public function exportAction() { }
    public function viewdataAction() { }
    public function customersAction() { }
    

}


