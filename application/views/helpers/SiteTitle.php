<?php

class Zend_View_Helper_SiteTitle extends Zend_View_Helper_Abstract
{
    public function siteTitle()
    {
    	$c = Zend_Registry::get("config");
		return $c['siteTitle'];
    }
}
