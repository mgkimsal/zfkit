<?php
include_once("R.php");
include_once(APPLICATION_PATH."/models/base.php");
include_once(APPLICATION_PATH."/../vendor/autoload.php");

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

	protected function _initLogger()
	{
		 $this->bootstrap("log");
		 $logger = $this->getResource("log");
		 Zend_Registry::set("logger", $logger);
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
		Zend_Registry::set("config", $config);
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
		$view->theme = $viewini->bootstraptheme;
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

	public function _initDemoCompany()
	{
		$c = R::findOne('company', ' name=?', array('Demo company'));
		if($c==null)
		{
			$c = R::dispense("company");
			$c->name = 'Demo company';
			R::store($c);
		}
	}
	public function _initDemoManager()
	{
		$u = R::findOne('account', ' username=?', array('demomanager'));
		if($u==null)
		{
			$u = R::dispense("account");
			$u->username = 'demomanager';
			$u->name = "Demo Manager";
			$u->setPassword('demo');
			R::store($u);
		}
		$c = R::findOne('company', ' name=?', array('Demo company'));
		$arole = Role::findOneByName("manager");
		R::associate($u,$arole);
		$u->company = $c;
		R::store($u);
	}
	public function _initDemoUser()
	{
		$u = R::findOne('account', ' username=?', array('demouser'));
		if($u==null)
		{
			$u = R::dispense("account");
			$u->username = 'demouser';
			$u->name = "Demo User 1";
			$u->setPassword('demo');
			R::store($u);
		}
		$c = R::findOne('company', ' name=?', array('Demo company'));
		$arole = Role::findOneByName("technician");
		R::associate($u,$arole);
		$u->company = $c;
		R::store($u);
	}


	protected function _initFacebook() {
		$config = $this->getOptions();
		if($config['facebook']['appId']!='')
		{
		 $facebook = new Facebook(array(
		   'appId'  => $config['facebook']['appId'],
		   'secret' => $config['facebook']['secret'],
		 ));

		 // Get User ID
		 Zend_Registry::set("facebook", $facebook);
		 Zend_Registry::set("fbuser",$facebook->getUser());
		}

 }
}
class MyModelFormatter implements RedBean_IModelFormatter {
	public function formatModel($model) {
		return 'Models_'.$model;
	}
}

// for facebook only
function parse_signed_request($signed_request, $secret) {
  list($encoded_sig, $payload) = explode('.', $signed_request, 2);

  // decode the data
  $sig = base64_url_decode($encoded_sig);
  $data = json_decode(base64_url_decode($payload), true);

  if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
    error_log('Unknown algorithm. Expected HMAC-SHA256');
    return null;
  }

  // check sig
  $expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
  if ($sig !== $expected_sig) {
    error_log('Bad Signed JSON signature!');
    return null;
  }

  return $data;
}
function base64_url_decode($input) {
    return base64_decode(strtr($input, '-_', '+/'));
}

