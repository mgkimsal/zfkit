<?php
class models_circle extends models_base {

	public $name;
	public $type;

	public function addAccount($account)
	{
		$group = R::load("circle", $this->id);
		$group->sharedAccount[] = $account;
		R::store($group);
	}

	public function removeAccount($account)
	{
		$group = R::load("circle", $this->id);
		R::unassociate($group, $account);
		R::store($group);
	}

}