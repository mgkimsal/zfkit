<?php

class Zend_View_Helper_FullUrl extends Zend_View_Helper_Abstract
{
    public function fullUrl()
    {
    	$c = Zend_Registry::get("config");
		return $c['base']['fullurl'].$this->view->baseUrl();
    }
}
