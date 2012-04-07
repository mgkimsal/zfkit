<?php

class foo
{
	
	function prefoobar($sum)
	{
		if($sum<5) { 
			throw new Exception("pre condition failed!");
		}
	}
	
	function postfoobar($sum)
	{
		if($sum>10) { 
			throw new Exeption("post condition failed!");
		}
	}
	
	public function foobar($sum)
	{
		Contract::assert();
		echo "sum is always at least 5!  sum=$sum\n";

			Contract::assert();
		
	}
	
	
	public function barfoo()
	{
		
	}
	
}