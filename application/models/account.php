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
	
	public function hasRole($roleName)
	{
		$roles = R::related($this, 'role');
		foreach($roles as $role)
		{
			if(strtolower($role->name)==strtolower($roleName))
			{
				return true;
			}
		}
		return false;
	}
		
}