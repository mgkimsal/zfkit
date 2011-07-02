<?php

class Zend_View_Helper_Allcss extends Zend_View_Helper_Abstract {

	/**
	 * (non-PHPdoc)
	 * @see Zend_View_Helper_Abstract::setView()
	 */
	function setView(Zend_View_Interface $view) {
		$this->view = $view;
	}
	
	/**
	 * 
	 * Grab all CSS in public/css folder
	 * and return link tags for all, in alpha order
	 */
	public function allcss() {
		$cssPath = APPLICATION_PATH . "/../public/css/";
		$files = scandir ( $cssPath );
		sort ( $files );
		$css = '';
		foreach ( $files as $f ) {
			if (substr ( $f, - 4 ) != '.css') {
				continue;
			}
			$css .= <<<EOD
<link rel="stylesheet" href="{$this->view->baseUrl()}/css/$f" type="text/css">
EOD;
		}
		return $css;
	}
}
