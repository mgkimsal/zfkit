<?php

class Zend_View_Helper_footerprinter extends Zend_View_Helper_Abstract
{
    public function footerprinter()
    {
$s = <<<EOD
<footer>
    <div class="container footer">
&nbsp;

    </div>

</footer>
EOD;
        return $s;

    }
}
