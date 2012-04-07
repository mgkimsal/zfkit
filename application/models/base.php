<?php
class models_base extends RedBean_SimpleModel {
	
	public function k__get($f)
	{
		if(method_exists($this, "get$f"))
		{
			$m = "get$f";
			return $this->$m();
		}
		parent::__get($f);
	}
	
	static public function __callStatic($func, $args)
	{
		if(substr($func,0,9)=="findOneBy")
		{
			$col = substr($func,9);
			$class = str_replace("models_","", strtolower(get_called_class()));
			$r = R::findOne($class, " $col=?", array($args[0]));
		}
		if(substr($func,0,6)=="findBy")
		{
			$col = substr($func,6);
			$class = str_replace("models_","", strtolower(get_called_class()));
			$r = R::find($class, " $col=?", array($args[0]));
		}
		return $r;
	}
	
	
}