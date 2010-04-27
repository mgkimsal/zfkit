<?php
// might need to set the time zone if your php doesn't have it set
// date_default_timezone_set('America/New_York');


include("../base.php");
$application->bootstrap()
            ->run();
