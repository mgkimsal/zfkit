<?php

class IndexController extends Zend_Controller_Action 
{


	public function init()
	{
        $this->_helper->_layout->setLayout("front");
    	$u = Zend_Registry::get("session")->user;
        $this->view->user = $u;
		if($u!=null){
//			$this->_redirect("project");
		}
	}

    public function indexAction()
   	{

    }

	public function viewAction()
	{
        $request = $this->getRequest();
        $r = $request->getParam("r");
        if($r)
        {
            $m = R::findOne("link", " linkid=?", array($r));
            if($m)
            {
                $v = R::dispense("messageaction");
                $v->imageview = "n";
                $v->link = $m;
                $v->ip = $_SERVER['REMOTE_ADDR'];
                $v->agent = $_SERVER['HTTP_USER_AGENT'];
                $v->date = time();
		$mess = $m->message;
			$v->message_id = $mess->id;
                R::store($v);
                $mess->ownMessageaction[] = $v;
	//	R::store($mess);
                header("Location: ".$m->linkto);
                die();
            }
        }
	}

    public function iAction() { 
           $request = $this->getRequest();
           $r = $request->getParam("r");
           if($r)
           {
               $m = R::findOne("message", " hash=?", array($r));
//                   Zend_Debug::dump($m);die();
//                   Zend_Debug::dump($m->ownMessageaction);die();
               if($m)
               {
                   $v = R::dispense("messageaction");
                   $v->imageview = "y";
			$v->message_id = $m->id;
		   $v->link = null;
                   $v->ip = $_SERVER['REMOTE_ADDR'];
                   $v->agent = $_SERVER['HTTP_USER_AGENT'];
                   $v->date = time();
                   R::store($v);
                   $m->ownMessageaction[] = $v;
//                   R::store($m);
//                   Zend_Debug::dump($m->ownMessageaction);die();
//                   R::store($v);
                   header("Location: ".$this->view->baseUrl()."one.gif");
                   die();
               }
           } else {
           die('www');
           }

   	}


	public function aboutAction()
	{


	}


	public function contactAction()
	{
	}

	public function tosAction()
	{
	}

	public function privacyAction()
	{
	}
	public function postAction()
	{
		$r = R::dispense("signup");
		$r->email = $_POST['email'];
		R::store($r);
        $this->_helper->_layout->setLayout("interior");

	}
    public function timeAction()
    {
        die("now is ".date("h:i:s"));
    }

    public function showAction()
    {
        $page = $this->_request->getParam("page");
        $html = @file_get_contents(APPLICATION_PATH."/page/$page");
        $this->view->html = $html;
    }

    public function editAction()
    {
        $page = $this->_request->getParam("page");
        $html = @file_get_contents(APPLICATION_PATH."/page/$page");
        $this->view->page = $page;
        $this->view->html = $html;
    }

    public function upAction()
    {
        $page = $this->_request->getParam("page");
        file_put_contents(APPLICATION_PATH."/page/$page", $_POST['html']);
        header("Location: ".$this->view->baseUrl()."index/show/page/".$page);
        die();
    }



}


