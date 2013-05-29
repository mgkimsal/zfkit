<?php

class ProfileController extends Zend_Controller_Action
{

	public function init() {
		$this->_config = Zend_Registry::get("config");
		$this->session = new Zend_Session_Namespace("site");
		$this->view->pageTitle = "My profile";
		$this->user = $this->session->user;
		$this->log = Zend_Registry::get("logger");
	}

	public function indexAction() {

		$form = new Form_Profile();
		$request = $this->getRequest();
		$exist = R::findOne("account", " id=?", array($this->user->id));

		if ($request->isPost()) {
			if ($form->isValid($request->getPost())) {
				$v = $form->getValues();
				if ($exist != null) {
					$u = $exist;
					$u->name = $v['name'];
					if($v['password']!='')
					{
						$u->password = sha1($v['password']);
					}
					$u->email = $v['email'];
					$u->updateDate = date("m/d/Y");
					$u->updateTime = time();
					R::store($u);

					$this->_helper->redirector('index');
					return;
				}

			}
		} else {
			$keys = $exist->export();
			foreach($keys as $k=>$v)
			{
				$e = $form->getElement($k);
				if($e)
				{
					$e->setValue($v);
				}
			}
		}
		$this->view->form = $form;
	}


	public function thankyouAction() {
		$this->view->pageTitle = null;
	}

	public function facebookAction() {
		/** @var $facebook Facebook */
		$facebook = Zend_Registry::get("facebook");
		$t = $facebook->api("/me");
		Zend_Debug::dump($t);
		die();
	}
}
