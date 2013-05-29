<?php
// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));

// Define application environment
if(!defined('APPLICATION_ENV')) {
	$value = trim(file_get_contents(dirname(__FILE__)."/servertype.txt"));
	if($value=='') {
		$value = 'development';
	}
	define('APPLICATION_ENV', $value);
}

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    realpath(APPLICATION_PATH . '/../library/Zend/Test'),
    get_include_path(),
)));

/** Zend_Application */
if(!@include_once( 'Zend/Application.php')) {
	        die("Can't find the Zend/ library files - did you unzip the file in /library ?");
}


// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);

// need more cowbell
