<?php

class RegisterController extends Zend_Controller_Action 
{

    public function init()
    {
    	$this->_config = Zend_Registry::get("config");
		$this->session = new Zend_Session_Namespace("site");
        $this->view->pageTitle = "Register";
    }

    public function indexAction()
    {
        $form = new Form_Register();
        $request = $this->getRequest();
        if ($request->isPost()) {
            if ($form->isValid($request->getPost())) {
				$v = $form->getValues();
				$u = R::dispense("account");
		
				$u->username = $v['username'];
				$u->password = sha1($v['password']);
				$u->email = $v['email'];
				R::store($u);
		
				$mail = new Zend_Mail();
				$mail->setSubject($this->_config['register']['welcomeSubject']);
				$mail->addTo($u->email);
				$mail->setBodyText("Welcome!");
			    try {
                    $mail->send();
                } catch (Exception $e)
                {
                    Zend_Debug::dump($e);
                    die();
                }

				
				$this->session->user = $u;
				
		        $this->_helper->redirector('thankyou'); 
	    		return;
				
            }
        }
        $this->view->form = $form;
    }

    public function thankyouAction()
    {
    	
    }
}
