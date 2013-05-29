<?php

class Zend_View_Helper_flashMessagesMobile extends Zend_View_Helper_Abstract 
{
	protected $_fm;
	
	public function flashMessagesMobile()
	{
		$m = $this->getMessenger()->getMessages();
		$all = '';
		if(!is_array($m)) { return ; } 
		foreach($m as $message) {
			$all .= <<<EOD
			<div class="row-fluid alertmessages">
			<div class="alert-block span12">
			<div class="alert alert-success textcenter mobilebuttonalert" data-theme="e" data-role="button" data-icon="info" data-iconpos="right" >
			 $message
			</div>
			</div>
			</div>
EOD;
		}
		return $all;
	}
	

	protected function getMessenger()
    {
    	
        if (null === $this->_fm) {
            $this->_fm =
                Zend_Controller_Action_HelperBroker::getStaticHelper(
                    'FlashMessenger');
        }
        return $this->_fm;

    }
}


