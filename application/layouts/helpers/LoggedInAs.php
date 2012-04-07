<?php

class Zend_View_Helper_loggedInAs extends Zend_View_Helper_Abstract 
{
    public function loggedInAs()
    {
    	$session = new Zend_Session_Namespace("site");
    	return $session->user;
    }
}
