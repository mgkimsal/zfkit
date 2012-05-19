<?php
/**
 * based on http://akrabat.com/zend-auth-tutorial/
 */

class AuthController extends Zend_Controller_Action 
{

	public function init()
	{
        parent::_init();
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
        $errors = array();
        if ($request->isPost()) {
            if ($form->isValid($request->getPost())) {
            	if ($this->_process($_POST)) {
            		// We're authenticated! Redirect to the home page
                    $this->_helper->redirector('index', 'index');
                }
            }
            $errors[] = "We couldn't log you in with that information";
        }
        $this->view->form = $form;
        $this->view->errors = $errors;
    }

    public function logoutAction()
    {
    	Zend_Registry::get("session")->user = null;
        $this->_helper->redirector('index'); // back to login page
    }

    public function forgotAction()
    {
        $this->view->pageTitle = "I forgot my password";
        if($_POST) {

            $u = R::findOne("account", " username=? or email=?", array($_POST['username'], $_POST['email']));
            if($u==null)
            {
                $errors[] = "We couldn't find an account with that information";
                $this->view->errors = $errors;
            } else {
                $u->resetkey = sha1(microtime()).":".time();
                R::store($u);
                $link = $this->_config['base']['fullurl']."auth/forgotprocess/key/".$u->resetkey;
                $email = file_get_contents(APPLICATION_PATH."/configs/".$this->_config['register']['forgotPasswordEmail']);
                $email = str_replace("[url]", $link, $email);

                $zm = new Zend_Mail();
                $zm->setSubject("Reset your password");
                $zm->addTo($u->email);
                $zm->setBodyText($email);
                $zm->send();
                $info[] = "We've sent a link to your email - please check that email to reset your password";
                $this->view->info = $info;

            }


        }

    }

    public function forgotprocessAction()
    {
        $this->view->pageTitle = "Reset my password";
        $key = $this->_getParam("key");
        $u = R::findOne("account", " resetkey=?", array($key));
        $this->view->user = $u;
        $errors = array();
        $info = array();
        if($_POST)
        {
            if(trim($_POST['password'])=='')
            {
                $errors[] = "Can't have a blank password";
            }
            if($_POST['password']!=$_POST['password2'])
            {
                $errors[] = "Passwords don't match";
            }
            if(count($errors)==0)
            {
                $u->password = sha1($_POST['password']);
                R::store($u);
                $info[] = "Password successfully updated";
                $this->view->done = true;
            }
            $this->view->errors = $errors;
            $this->view->info = $info;
        }
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
