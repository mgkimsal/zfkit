<?php

class ProjectController extends Zend_Controller_Action
{


	public function init()
	{
        $this->user = Zend_Registry::get("session")->user;
        if($this->user==null)
        {
            header("Location: ".$this->view->baseUrl());
            die();
        }
        if($this->user->registerDate=='')
        {
            $this->user->registerDate=date("m/d/Y");
            R::store($this->user);
        }
        $this->view->user = $this->user;
        $this->_config = Zend_Registry::get("config");
	}

	public function indexAction()
	{
		if($this->user->hasRole("manager"))
		{
			$this->_redirect("manage/");
		   die();
		}
		if($this->user->hasRole("technician"))
		{
			echo('technician');
		}


        $this->view->pageTitle = "Projects";
        $projects = R::find("project", " user_id=? and deleted!='y'", array($this->user->id));
        $activeCount = 0;
        $pids = array();
        list($pids, $activeCount) = $this->getActiveCount($projects);

        $this->view->activeCount = $activeCount;
        $plan = $this->user->plan;
        if($plan=='') { $this->user->plan='lite'; $plan = 'lite'; }
        $this->view->plan = $plan;

        $this->view->maxProjects = $this->getMaxprojectsPerPlan($plan);
        $this->view->maxCaptures = $this->getMaxcapturesPerPlan($plan);
        /**
         * captures per month
         */
        $startDateDay = date("d",strtotime($this->user->registerDate));
        $nowDate = date("d");
        $nowMonth = date("m");
        $nowYear = date("Y");
        // @fixme
        // let's say today is the 5th, and the start date was on the 9th.
        // we'll check all captures from last month's 9th through this month's 9th
        if($nowDate<$startDateDay) {
            $startTimestamp = strtotime(date("$nowMonth/$startDateDay/$nowYear"));
            $endRange = strtotime("+1 month", $startTimestamp);
            $startRange = $startTimestamp;
        } else {
            $startTimestamp = strtotime(date("$nowMonth/$startDateDay/$nowYear"));
            $endRange = strtotime("+1 month", $startTimestamp);
            $startRange = $startTimestamp;
        }

        $c = R::find("response", " project_id in (".join(",", $pids).") and submitted>=? and submitted<=?",
        array($startRange, $endRange));

        $this->view->captureCountThisMonth = count($c);

        $this->view->projects = $projects;

	}

    protected function getActiveCount($projects)
    {
        $activeCount = 0;
        $pids = array();
        foreach ($projects as $p)
        {
            $pids[] = $p->id;
            if ($p->active == 'y') {
                $activeCount++;
            }
        }
        return array($pids, $activeCount);
    }

    public function addAction()
    {
        $p = R::dispense("project");
        $p->name = $_POST['name'];
        $p->deleted = 'n';
        $p->active = 'y';
        $p->user_id = $this->user->id;
        $p->hash = md5(time().$p->name);
        R::store($p);
        for($x=1; $x<10; $x++) {
            $t = R::dispense("field");
            $t->orderid = $x;
            $t->project_id = $p->id;
            R::store($t);
        }
        $this->_redirect("project/edit/id/".$p->id);
        die();

    }

	public function editAction()
	{
        $id =  (int)$this->_request->getParam("id");
        $project = R::findOne("project", " id=? and user_id=?", array($id, $this->user->id));
        if($project==null)
        {
            $this->_redirect("project");
            die();
        }
        $this->view->project = $project;
        $fields = R::find("field", " project_id=? order by orderid", array($project->id));
        $this->view->fields = $fields;
        Zend_Registry::get("session")->previewForm = null;
	}

    public function updateAction()
    {
        $id =  (int)$this->_request->getParam("id");
        $project = R::findOne("project", " id=? and user_id=?", array($id, $this->user->id));
        if($project==null)
        {
            $this->_redirect("project");
            die();
        }
        $project->name = $_POST['name'];
        $project->description = $_POST['description'];
        $emails = explode("\n",$_POST['emails']);
        $project->posturl = $_POST['posturl'];

        $existingEmails = array();
        foreach($emails as $e)
        {
            foreach($project->ownContributor as $c)
            {
                if(trim($c->email)==trim($e))
                {
                    $existingEmails[$c->email] = $c;
                }
            }
        }


        foreach($emails as $e) {
            $e = trim($e);
            if($e=='') {
                continue;
            }
            if(array_key_exists($e, $existingEmails))
            {
                $newEmails[] = $existingEmails[$e];
            } else {
                echo "making new for $e<BR>\n";
                $q = R::dispense("contributor");
                $q->email = trim($e);
                $q->project_id = $project->id;
                $q->hash = md5($e.$project->id).$project->id;
                R::store($q);
                $newEmails[] = $q;
            }
        }
        $project->ownContributor = $newEmails;
        R::store($project);


        foreach($_POST['field'] as $num=>$data)
        {
            $f = R::findOne("field", " project_id=? and orderid=?", array($project->id, $num));
            if($f==null)
            {
                $f = R::dispense("field");
                $f->project_id = $project->id;
                R::store($f);
            }
            $f->orderid = $num;
            $f->type = $data['type'];
            $f->name = $data['name'];
            $f->options = $data['options'];
            R::store($f);
            $newFields[] = $f;

        }
        $project->ownFields = $newFields;
        R::store($project);


        $this->_helper->redirector('index');
    }

	public function exportAction()
	{
        $id =  (int)$this->_request->getParam("id");
        $project = R::findOne("project", " id=? and user_id=?", array($id, $this->user->id));
        if($project==null)
        {
            $this->_redirect("project");
            die();
        }

        $this->view->pageTitle = "Responses for ".$project->name;
        $responses = R::find("response", " project_id=?", array($project->id));
        $fields = R::find("field", " project_id=? order by orderid", array($project->id));
        $this->view->fields = $fields;
        $this->view->responses = $responses;
        $this->view->project = $project;


	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename=\"fieldflag-export.csv\"");
	header("Pragma: no-cache");
	header("Expires: 0");

	$line = "Date\tWho\tOriginal_coords\tCoords\tIP\tUser_Agent";
	
        foreach($fields as $num=>$field) {
		$line .= "\t".$field->name;
	}
	$line .= "\n";

	foreach($responses as $r) {
		$line .= date("m/d/Y h:i a", $r->submitted)."\t";
		$u = R::findOne("contributor", " id=?", array($r->who_id));
		$line .= $u->email."\t";
		$line .= $r->latfirst."/".$r->lonfirst."\t";
		$line .= $r->lat."/".$r->lon."\t";
        $line .= $r->ip."\t";
        $line .= "\"".$r->agent."\"";

		$num = 0;
		foreach($fields as $field) {
			++$num;
			$key = "response$num";
			$line .= "\t".$r->$key;
		}
		$line .= "\n";
	}

	echo $line;
die();
	}

    public function picAction()
    {
        $id =  (int)$this->_request->getParam("id");
        $hash =  $this->_request->getParam("hash");
        $project =  $this->_request->getParam("project");
        $f = R::findOne("file", " id=? and hash=? and projecthash=?", array($id, $hash, $project));
        if(!$f)
        {
            header("Location: /empty.gif");
        } else {
            if($f->data && !$f->thumbnailData)
            {
                $thumb = $this->thumbnailFiledata(100);
                if($thumb)
                {
                    $f->thumbnailData = file_get_contents($thumb);
                    $f->thumbnailSize = strlen($this->thumbnailData);
                    $f->thumbnailData = base64_encode($f->thumbnailData);
                    $f->thumbnailType = "image/jpeg";
                    R::store($f);
                }
            }
            header("Content-type: ".$f->type);
            echo base64_decode($f->data);
            die();
        }
    }

    public function picthumbAction()
    {
        $id =  (int)$this->_request->getParam("id");
        $hash =  $this->_request->getParam("hash");
        $project =  $this->_request->getParam("project");
        $f = R::findOne("file", " id=? and hash=? and projecthash=?", array($id, $hash, $project));
        if(!$f)
        {
            header("Location: /empty.gif");
        } else {
            if($f->data && !$f->thumbnailData)
            {
                $thumb = $this->thumbnailFiledata(100);
                if($thumb)
                {
                    $f->thumbnailData = file_get_contents($thumb);
                    $f->thumbnailSize = strlen($this->thumbnailData);
                    $f->thumbnailData = base64_encode($f->thumbnailData);
                    $f->thumbnailType = "image/jpeg";
                    R::store($f);
                }
            }
            header("Content-type: ".$f->thumbnailType);

            echo base64_decode($f->thumbnailData);
            die();
        }

    }

	public function responsesAction()
	{
        $id =  (int)$this->_request->getParam("id");
        $project = R::findOne("project", " id=? and user_id=?", array($id, $this->user->id));
        //$this->view->pageTitle = "Responses for ".$project->name;
        $responses = R::find("response", " project_id=?", array($project->id));
        $fields = R::find("field", " project_id=? order by orderid", array($project->id));
        $this->view->fields = $fields;
        $this->view->responses = $responses;
        $this->view->project = $project;
	}

    public function responsesprintAction()
   	{
           $id =  (int)$this->_request->getParam("id");
           $project = R::findOne("project", " id=? and user_id=?", array($id, $this->user->id));
           //$this->view->pageTitle = "Responses for ".$project->name;
           $responses = R::find("response", " project_id=?", array($project->id));
           $fields = R::find("field", " project_id=? order by orderid", array($project->id));
           $this->view->fields = $fields;
           $this->view->responses = $responses;
           $this->view->project = $project;
           $this->_helper->_layout->setLayout("print");

   	}


    public function delAction()
   	{
           $id =  $this->_request->getParam("id");
           $project = R::findOne("project", " id=? and user_id=?", array($id, $this->user->id));
           if($project)
           {
               $project->deleted = "y";
               R::store($project);
           }
           $this->_helper->redirector('index');
    }

    public function deactivateAction()
   	{
           $id =  $this->_request->getParam("id");
           $project = R::findOne("project", " id=? and user_id=?", array($id, $this->user->id));
           if($project)
           {
               $project->active = "n";
               R::store($project);
           }
           $this->_helper->redirector('index');
    }

    public function reactivateAction()
   	{
           $projects = R::find("project", " user_id=? and deleted!='y'", array($this->user->id));
           list($pids, $activeCount) = $this->getActiveCount($projects);
           $max = $this->getMaxprojectsPerPlan($this->user->plan);
            if($activeCount>=$max)
            {
                $this->_helper->flashMessenger->addMessage("Your account is at its limit of active projects.  Can not reactivate selected project.");
                $this->_helper->redirector('index');
            }
           $id =  $this->_request->getParam("id");
           $project = R::findOne("project", " id=? and user_id=?", array($id, $this->user->id));
           if($project)
           {
               $project->active = "y";
               R::store($project);
           }
           $this->_helper->redirector('index');
    }

    public function emailAction()
   	{
           $id =  (int)$this->_request->getParam("id");
           $project = R::findOne("project", " id=? and user_id=?", array($id, $this->user->id));
           $con = $project->ownContributor;
           $subject = "Your FieldFlag Capture Assignment";
           $url = "http://".$_SERVER['HTTP_HOST'].$this->view->baseUrl();
           $txtFile = $this->_config['register']['projectEmail'];
           $htmlFile = $this->_config['register']['projectEmailHtml'];

           foreach($con as $c)
           {
               ob_start();
               include($txtFile);
               $txt = ob_get_clean();
               ob_start();
               include($htmlFile);
               $html = ob_get_clean();
               $z = new Zend_Mail();
               $z->setBodyText($txt);
               $z->setBodyHtml($html);
               $z->addTo($c->email);
               $z->setSubject($subject);
               $z->send();
           }
           $this->_helper->flashMessenger->addMessage("Email invitations sent to your team.");
           $this->_helper->redirector('index');
   	}



    public function exportxlsAction()
    	{
            $id =  (int)$this->_request->getParam("id");
            $project = R::findOne("project", " id=? and user_id=?", array($id, $this->user->id));
            if($project==null)
            {
                $this->_redirect("project");
                die();
            }

            $wb = new Spreadsheet_Excel_Writer();
            $ws = $wb->addWorksheet("Field Flag Results");

            $format_header =& $wb->addFormat();
            $format_header->setBold();
            $format_header->setColor("white");
            $format_header->setFgColor('black');  // cell background


            $this->view->pageTitle = "Responses for ".$project->name;
            $responses = R::find("response", " project_id=?", array($project->id));
            $fields = R::find("field", " project_id=? order by orderid", array($project->id));
            $this->view->fields = $fields;
            $this->view->responses = $responses;
            $this->view->project = $project;

            $ws->setColumn(0,(7+count($fields)),15);

            $row = 0;
            $col=0;
            $ws->write($row, $col++, "Date", $format_header);
            $ws->write($row, $col++, "Time", $format_header);
            $ws->write($row, $col++, "Who", $format_header);
            $ws->write($row, $col++, "Original Latitude", $format_header);
            $ws->write($row, $col++, "Original Longitude", $format_header);
            $ws->write($row, $col++, "Final Latitude", $format_header);
            $ws->write($row, $col++, "Final Longitude", $format_header);
            $ws->write($row, $col++, "IP Address", $format_header);
            $ws->write($row, $col++, "User Agent", $format_header);
            foreach($fields as $num=>$field) {
                if($field->name!='') {
                    $ws->write($row, $col++, $field->name, $format_header);
                }
    	    }
            /*
            header("Content-type: text/csv");
            header("Content-Disposition: attachment; filename=\"fieldflag-export.csv\"");
            header("Pragma: no-cache");
            header("Expires: 0");
*/
    	foreach($responses as $r) {
            $row++;
            $col=0;
    		$u = R::findOne("contributor", " id=?", array($r->who_id));
            $ws->write($row, $col++,  date("m/d/Y", $r->submitted));
            $ws->write($row, $col++,  date("h:i a", $r->submitted));
            $ws->write($row, $col++, $u->email);
            $ws->write($row, $col++, $r->latfirst);
            $ws->write($row, $col++, $r->lonfirst);
            $ws->write($row, $col++, $r->lat);
            $ws->write($row, $col++, $r->lon);
            $ws->write($row, $col++, $r->ip);
            $ws->write($row, $col++, $r->agent);

    		$num = 0;
    		foreach($fields as $n=>$field) {
                $num++;
    			$key = "response$num";
                $type = "responseType$num";
                if($field->name=='') { continue; }
                if($type!='file')
                {
                    $ws->write($row, $col++, $r->$key);
                } else
                {
                    $ws->write($row, $col++, "n/a");

                }
            }
    	}
            $wb->send("fieldflagexport.xls");
            $wb->close();

    die();
    	}


    protected function getMaxprojectsPerPlan($plan)
    {
        $max = 1;
        if($plan=='lite')
        {
            $max = 1;
        }
        if($plan=='standard')
        {
            $max = 5;
        }
        if($plan=='enterprise')
        {
            $max = 15;
        }
        return $max;
    }

    protected function getMaxcapturesPerPlan($plan)
    {
        $max = 1;
        if($plan=='lite')
        {
            $max = 100;
        }
        if($plan=='standard')
        {
            $max = 3000;
        }
        if($plan=='enterprise')
        {
            $max = 10000;
        }
        return $max;
    }

    public function previewAction()
    {
        Zend_Registry::get("session")->previewForm = serialize($_POST);
        echo "OK";
        die();
    }

    protected function thumbnailFile($file, $newWidth=100)
    {
        $info = pathinfo($file);
        if (in_array(strtolower($info['extension']), array("jpg","jpeg","png")) )
        {
            if ( strtolower($info['extension']) == 'png' )
            {
                $img = imagecreatefrompng( $file );
            } else {
                $img = imagecreatefromjpeg( $file );
            }
              $width = imagesx( $img );
              $height = imagesy( $img );
              $newHeight = floor( $height * ( $newWidth / $width ) );

              // create a new temporary image
              $tmp_img = imagecreatetruecolor( $newWidth, $newHeight );

              // copy and resize old image into new image
              imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height );

              // save thumbnail into a file
              imagejpeg( $tmp_img, $file.".thumb" );
            return $file.".thumb";
        }
        return null;

    }

    protected function thumbnailFiledata($data, $newWidth=100)
    {
        $file = tmpfile();
        file_put_contents($file, $data);
        $out = $this->thumbnailFile($file, $newWidth);
        return $out;
    }
}


