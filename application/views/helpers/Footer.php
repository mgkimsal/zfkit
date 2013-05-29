<?php

class Zend_View_Helper_footer extends Zend_View_Helper_Abstract
{
    public function footer()
    {
$s = <<<EOD
<footer>
    <div class="container footer">
<h3>Contact</h3>

        <p>Phone: 919-648-0477</p>
        <p>Email: <a href="mailto:info@fieldflag.com">info@fieldflag.com</a></p>
        <br/>
<p>&copy; 2012 fieldflag.com </p>
    </div>

</footer>

EOD;
        return $s;

    }
}
