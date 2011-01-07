<?php

class RegisterController extends Zend_Controller_Action 
{

    public function init()
    {
	$this->_config = Zend_Registry::get('config');
	
    }

    public function indexAction()
    {
        $form = new Form_Register();
        $request = $this->getRequest();
        if ($request->isPost()) {
            if ($form->isValid($request->getPost())) {
		$v = $form->getValues();
		$u = new Account();
		$u->username = $v['username'];
		$u->password = $v['password'];
		$u->email = $v['email'];
		$u->save();

		$mail = new Zend_Mail();
		$mail->setFrom($this->_config['register']['fromEmail']);
		$mail->setSubject($this->_config['register']['welcomeSubject']);
		$mail->addTo($u->email);
		$mail->setBodyText("Welcome!");
		$mail->send();
		
            }
        }
        $this->view->form = $form;
    }

}
