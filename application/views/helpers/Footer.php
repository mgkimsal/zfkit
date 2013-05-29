<?php

class Zend_View_Helper_footer extends Zend_View_Helper_Abstract
{
    public function footer()
    {
		$config = Zend_Registry::get("config");
		$phone = $config['contact']['phone']?:"";
		$email = $config['contact']['email']?:"";
		$copyright = $config['contact']['copyright']?:"";
$s = <<<EOD
<footer>
    <div class="container footer">
<h3>Contact</h3>

        <p>Phone: $phone</p>
        <p>Email: <a href="mailto:$email">$email</a></p>
        <br/>
<p>$copyright </p>
    </div>

</footer>

EOD;
        return $s;

    }
}
