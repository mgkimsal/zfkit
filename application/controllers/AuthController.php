<?php
/**
 * based on http://akrabat.com/zend-auth-tutorial/
 */

class AuthController extends Zend_Controller_Action 
{

    public function indexAction()
    {
        $form = new Form_Login();
        $request = $this->getRequest();
        if ($request->isPost()) {
            if ($form->isValid($request->getPost())) {
                if ($this->_process($form->getValues())) {
                    // We're authenticated! Redirect to the home page
                    $this->_helper->redirector('index', 'index');
                }
            }
        }
        $this->view->form = $form;
    }

    public function logoutAction()
    {
        Zend_Auth::getInstance()->clearIdentity();
        $this->_helper->redirector('index'); // back to login page
    }

    protected function _process($values)
    {
        // Get our authentication adapter and check credentials
	$adapter = $this->_getAuthAdapter();
	$adapter->setIdentity($values['username']); 
	$adapter->setCredential($values['password']);


        $auth = Zend_Auth::getInstance();
        $result = $auth->authenticate($adapter);
        if ($result->isValid()) {
            $user = $adapter->getResultRowObject();
            $auth->getStorage()->write($user);
            return true;
        }
        return false;
    }

    protected function _getAuthAdapter()
    {
	$conn = Doctrine_Manager::getInstance()->getConnection('doctrine');
        $adapter = new ZendX_Doctrine_Auth_Adapter($conn);
        $adapter->setTableName('Account')
            ->setIdentityColumn('username')
            ->setCredentialColumn('password');

	return $adapter;
    }
        
}
