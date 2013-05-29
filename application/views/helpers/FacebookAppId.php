<?php

class Zend_View_Helper_FacebookAppId extends Zend_View_Helper_Abstract
{
    public function facebookAppId()
    {
    	$c = Zend_Registry::get("config");
		return $c['facebook']['appId'];
    }
}
