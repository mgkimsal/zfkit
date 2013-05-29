<?php
class models_account extends models_base {
	
	public function setUsername($v)
	{
		$this->username = $v;
	}
	
	public function setPassword($v)
	{
		$this->password = sha1($v);
	}

	public function getCircles()
	{
		$circles = R::related(R::load("account",$this->id), "circle");
		$c = array();
		foreach($circles as $circle)
		{
			if($circle->deleted!='y')
			{
				$c[] = $circle;
			}
		}
		return $c;
	}

	public function getCircleByName($name)
	{
		$company = $this->getCompany();
		$circle = R::findOne("circle", " company_id=? and name=?", array($company->id, $name));
		return $circle;
	}

	public function addCircle($name)
	{
		$company = $this->getCompany();

		$myaccount = R::load("account",$this->id);
		$circle = R::findOne("circle", " company_id=? and name=?", array($company->id, $name));
		if(!$circle)
		{
			$circle = R::dispense("circle");
			$circle->company = $company;
			$circle->name = $name;
			$circle->creator = $myaccount;
			$circle->deleted = "n";
			R::store($circle);
			$myaccount->sharedCircle[] = $circle;
			R::Store($myaccount);
Zk_Log::log("made circle $name with id ".$circle->id);
		}

		return $circle;
	}

	public function deleteCircle($name)
	{
		$myaccount = R::load("account",$this->id);

		/**
		 * getCircleByName does company check too
		 */
		$circle = $this->getCircleByName($name);
		if($circle)
		{
			$circle->deleted = "y";
			R::store($circle);
//			R::unassociate($myaccount, $circle);
		}
	}


	public function getCompany() {
		$y = R::load("account",$this->id);
		return R::load("company",$y->company->id);
	}


	public function addToCompany($company) {
		$y = R::load("account",$this->id);
		$company->sharedAccount[] = $y;
		R::store($company);
	}


	public function hasRole($roleName)
	{
		$roles = R::related(R::load("account",$this->id), 'role');
		foreach($roles as $role)
		{
			if(strtolower($role->name)==strtolower($roleName))
			{
				return true;
			}
		}
		return false;
	}


	public function addProject($name)
	{
		$company = $this->getCompany();

		$myaccount = R::load("account",$this->id);
		$p = R::findOne("project", " company_id=? and name=?", array($company->id, $name));
		if(!$p)
		{
			$p = R::dispense("project");
			$p->company = $company;
			$p->name = $name;
			$p->creator = $myaccount;
			$p->deleted = "n";
			R::store($p);
			$myaccount->sharedProject[] = $p;
			R::Store($myaccount);
		}

		return $p;
	}


	public function getActiveProjects()
	{
		$company = $this->getCompany();
		$p = R::find("project", " company_id=? and deleted=? and creator_id=?", array($company->id, 'n', $this->id));
		return $p;
	}


}