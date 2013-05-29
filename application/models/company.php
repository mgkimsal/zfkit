<?php
class models_company extends models_base {

	public $name;

	public function addAccount($account)
	{
		$c = R::load("company", $this->id);
		$c->sharedAccount[] = $account;
		R::store($c);
		$account->company = $c;
		R::Store($account);
	}

	public function removeAccount($account)
	{
		$c = R::load("company", $this->id);
		R::unassociate($c, $account);
		R::store($c);
		$account->company = null;
		R::Store($account);
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
		$company = R::load("company",$this->id);
		$circle = R::findOne("circle", " company_id=? and name=?", array($company->id, $name));
		return $circle;
	}

	public function addCircle($name)
	{
		$company = R::load("company",$this->id);

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
			$myaccount->sharedCircles[] = $circle;
			R::Store($myaccount);
Zk_Log::log("made circle $name with id ".$circle->id);
		}

		return $circle;
	}

	public function deleteCircle($name)
	{
		$company = R::load("company",$this->id);

		/**
		 * getCircleByName does company check too
		 */
		$circle = $this->getCircleByName($name);
		if($circle)
		{
			$circle->deleted = "y";
			R::store($circle);
		}
	}

}