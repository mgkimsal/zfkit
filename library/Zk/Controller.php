<?php

class Zk_Controller extends Zend_Controller_Action
{

    public function _init()
    {
        $this->_config = Zend_Registry::get("config");
  		$this->session = new Zend_Session_Namespace("site");
        $this->view->config = $this->_config;
        //Zend_Debug::dump($this->_config);die();
    }


}