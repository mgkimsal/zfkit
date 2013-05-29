<?php

class Zend_View_Helper_AllowRegister extends Zend_View_Helper_Abstract
{
    public function allowRegister()
    {
    	$c = Zend_Registry::get("config");
		return $c['register']['allow'];
    }
}
