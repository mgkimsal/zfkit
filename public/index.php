<?php
$_start = microtime(true);
include("../base.php");
$application->bootstrap()
            ->run();
echo "<HR>";
echo microtime(true)-$_start;
