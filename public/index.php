<?php
// might need to set the time zone if your php doesn't have it set
// date_default_timezone_set('America/New_York');


// standard zf examples show this set in the virtual host
// which is a pain to set/swap :)
// set it to development, testing or production
// (which match up with the application.ini headings)

define("APPLICATION_ENV", "development");
//define("APPLICATION_ENV", "testing");
//define("APPLICATION_ENV", "production");

include("../base.php");
$application->bootstrap()
            ->run();
