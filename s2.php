<?php

class foo
{
	
	function prefoobar()
	{
		if(false) { 
			throw new Exception("pre condition failed!");
		}
	}
	
	public function foobar() {
$this->prefoobar(func_get_args());
$this->__foobar();
}

function __foobar()
	{
		
	}
	
	
	public function barfoo()
	{
		
	}
	
}