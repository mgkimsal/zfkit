<?php
/**
 * based on http://akrabat.com/zend-auth-tutorial/
 */

class AuthController extends Zend_Controller_Action 
{

	public function init()
	{
		$this->view->pageTitle = "Log in";
		$this->view->pageSubTitle = "";		
	}
	
    public function indexAction()
    {
    	if(@$_POST['topbtn']=='Register')
    	{
	        $this->_helper->redirector('index',"register"); // back to login page
    		return;
    	}
        $form = new Form_Login();
        $request = $this->getRequest();
        if ($request->isPost()) {
            if ($form->isValid($request->getPost())) {
            	if ($this->_process($_POST)) {
            		// We're authenticated! Redirect to the home page
                    $this->_helper->redirector('index', 'index');
                }
            }
        }
        $this->view->form = $form;
    }

    public function logoutAction()
    {
    	Zend_Registry::get("session")->user = null;
        $this->_helper->redirector('index'); // back to login page
    }

    protected function _process($values)
    {
    	$u = R::findOne('account', ' username=? and password=?', 
    	array($values['username'], sha1($values['password'])));

       	if($u)
    	{
    		Zend_Registry::get("session")->user = $u;
    		return true;
    	}
    	return false;
    }
 
}
