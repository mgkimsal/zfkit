<?php
include_once("R.php");
include_once(APPLICATION_PATH."/models/base.php");

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	public function _initRedbean()
	{
		$config = $this->getOption('redbean');
		R::setup($config['dsn'], $config['user'], $config['pass']);
		set_include_path(APPLICATION_PATH."/models:".get_include_path());

		RedBean_ModelHelper::setModelFormatter( new MyModelFormatter );
		
		spl_autoload_register(array($this, "redbeanloader"));
	}
	
	public function redbeanloader($class)
	{
		#echo "loading $class<BR>\n";
		$newclass = str_replace("_","/",$class);
		if(file_exists(APPLICATION_PATH."/$newclass.php"))
		{
		if(@include_once(APPLICATION_PATH."/$newclass.php"))
		{
			return;
		}
		}
		if(file_exists(APPLICATION_PATH."/models/$newclass.php"))
		{
		if(@include_once(APPLICATION_PATH."/models/$newclass.php"))
		{
			return;
		}
		}
		$c = "class $class extends models_base{}";
		eval($c);
//		echo $c."<BR>";
//		if(class_exists($class)) { echo "$class exists<BR>"; } 
	}

	public function _initConfig()
	{
		$config = $this->getOptions();
		Zend_Registry::set("config",$config);		
	}
	
	public function _initSession()
	{
		// init session
		Zend_Registry::set("session", new Zend_Session_Namespace("site") );		
	}
	


	public function _initView()
	{   
		$view = new Zend_View();
		$view->doctype('XHTML1_STRICT');
		$view->env = APPLICATION_ENV;
		$config = new Zend_Config_Xml(APPLICATION_PATH."/configs/menu.xml","nav");
		$nav = new Zend_Navigation($config);
		$view->navigation($nav);
		$view->addHelperPath('Zk/View/Helper', 'Zk_View_Helper');
		$render = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
		$render->setView($view);

		$viewini = new Zend_Config_Ini(APPLICATION_PATH."/configs/application.ini","view");
		
         Zend_Layout::startMvc();
		
Zend_Layout::getMvcInstance()->setLayout('layout_name');
		
		$view->layout()->setLayout($viewini->defaultlayout);
		return $view;
	} 


	
	public function _initUserRole()
	{
		$configs = Zend_Registry::get("config");
		$u = R::findOne('account', ' username=?',
		array($configs['zfkit']['admin']['user']));
		if($u==null)
		{
			$u = R::dispense("account");
			$u->username = $configs['zfkit']['admin']['user'];
			$u->setPassword($configs['zfkit']['admin']['pass']);
			R::store($u);
		}
		foreach($configs['zfkit']['roles'] as $r)
		{
			$role = R::findOne("role", "name=?",
			array($r));
			if($role==null)
			{
				$role = R::dispense("role");
				$role->name = $r;
				R::Store($role);
			}
		}
		$arole = Role::findOneByName("admin");
		R::associate($u,$arole);
		
	}

}
class MyModelFormatter implements RedBean_IModelFormatter {
	public function formatModel($model) {
		return 'Models_'.$model;
	}
}
