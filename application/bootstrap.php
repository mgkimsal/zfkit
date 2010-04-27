<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	public function _initDoctrine() { 

		$this->getApplication()->getAutoloader()->pushAutoloader(array('Doctrine', 'autoload'));
		spl_autoload_register(array('Doctrine','modelsAutoload'));
		$manager = Doctrine_Manager::getInstance();

		$config = $this->getOption('doctrine');
		Doctrine_Core::setModelsDirectory($config['models_path']);
		$connection = Doctrine_Manager::connection($config['dsn'], 'doctrine');

		$profiler = new Doctrine_Connection_Profiler();

		$connection->setListener($profiler);

	}

/**
 * if you want true zend-framework 'rest'-style URLs
 * with all that entails, uncomment this method
 */

/*
	public function _initRouting()
	{

		$this->bootstrap('frontController');
		$front = Zend_Controller_Front::getInstance();
		$router = $front->getRouter();
		$restRoute = new Zend_Rest_Route($front);
		$front->getRouter()->addRoute('rest', $restRoute);
	}
*/

}

