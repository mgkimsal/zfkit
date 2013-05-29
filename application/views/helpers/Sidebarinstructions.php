<?php


class Zend_View_Helper_Sidebarinstructions extends Zend_View_Helper_Abstract {

	/**
	 * (non-PHPdoc)
	 * @see Zend_View_Helper_Abstract::setView()
	 */
	function setView(Zend_View_Interface $view) {
		$this->view = $view;
	}
	
	/**
	 */
	public function sidebarinstructions() {
        $x = <<<EOD
                  <div class="sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Instructions</li>
              <li><a href="{$this->view->baseUrl()}page/addaproject">Add a project</a></li>
              <li><a href="{$this->view->baseUrl()}page/createdataform">Create a data entry form</a></li>
              <li><a href="{$this->view->baseUrl()}page/editdataform">Edit a data entry form</a></li>
              <li><a href="{$this->view->baseUrl()}page/deploy">Deploy your project </a></li>
              <li><a href="{$this->view->baseUrl()}page/collectdata">Collect data</a></li>
              <li><a href="{$this->view->baseUrl()}page/viewdata">View your data</a></li>
              <li><a href="{$this->view->baseUrl()}page/export">Export your data</a></li>
            </ul>
            </div>
EOD;
		return $x;
	}
}
