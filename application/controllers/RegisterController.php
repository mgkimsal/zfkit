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

                $exist = R::findOne("account", " username=? or email=?", array($_POST['username'], $_POST['email']));
                if($exist==null)
                {
                    $u = R::dispense("account");

                    $u->username = $v['username'];
                    $u->password = sha1($v['password']);
                    $u->email = $v['email'];
                    $u->registerDate = date("m/d/Y");
                    $u->registerTime = time();
                    R::store($u);

                    $mail = new Zend_Mail();
                    $mail->setSubject($this->_config['register']['welcomeSubject']);
                    $mail->addTo($u->email);
                    $mail->addBcc("mgkimsal@gmail.com");
                    $mail->setBodyText(@file_get_contents($this->_config['register']['registrationEmail']));
                    $mail->setBodyHtml(@file_get_contents($this->_config['register']['registrationEmailHtml']));
                    try {
                        $mail->send();
                    } catch (Exception $e)
                    {
                        die("Oops - we seem to have a problem.  Please press BACK and try again");
                        Zend_Debug::dump($e);
                        die();
                    }

                    $this->session->user = $u;

                    $this->_helper->redirector('thankyou');
                    return;
                } else {
                    if($exist->username==$_POST['username'])
                    {
                        $form->addErrorMessage("The selected username already exists - please select another");
                    }
                    if($exist->email==$_POST['email'])
                    {
                        $form->addErrorMessage("The selected email already exists - please select another");
                    }
                }
				
            }
        }
        $this->view->form = $form;
    }

    public function thankyouAction()
    {
        $this->view->pageTitle = null;
    }

	public function facebookAction()
	{
		/** @var $facebook Facebook */
		$facebook =  Zend_Registry::get("facebook");
		$t = $facebook->api("/me");
		Zend_Debug::dump($t);

		$exist = R::findOne("account", " fbid=?", array($t['id']));
		  if($exist==null)
		  {
			  $u = R::dispense("account");
			  $u->username = $t['username'];
			  $u->type = "facebook";
			  $u->name = $v['name'];
			  $u->registerDate = date("m/d/Y");
			  $u->registerTime = time();
			  R::store($u);
		  } else {
			  $u = $exist;
		  }
		$this->session->user = $u;

	   $this->_helper->redirector('index','profile');
	   return;
	}
}
