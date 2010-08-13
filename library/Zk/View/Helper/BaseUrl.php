<?php
/**
 * Helper for retrieving base URL
 *
 * @package Zk_View_Helper
 * @version $Id: $
 */
class Zk_View_Helper_BaseUrl extends Zend_View_Helper_Abstract
{
	/**
	 * @var string
	 */
	public $_baseUrl = null;

	/**
	 * Return base URL of application
	 *
	 * @return string
	 */
	public function baseUrl($url='') {
		if (null === $this->_baseUrl) {
			$this->_baseUrl = str_replace(basename(@$_SERVER['SCRIPT_FILENAME']), '', @$_SERVER['SCRIPT_NAME']);
		}
		return $this->_baseUrl .$url;
	}
}
