<?php

class Zend_View_Helper_loggedIn extends Zend_View_Helper_Abstract 
{
    public function loggedIn()
    {
    	$session = new Zend_Session_Namespace("site");
    	if($session->user!=null)
    	{
    		return true;
    	}
    	return false;
    }
}
