<?php

function contract($class)
{
	$f = file_get_contents($class, true);
	
	$t = preg_match_all("/function (.*?)\((.*?)\)/", $f, $m);
	foreach($m[1] as $key=>$functionName)
	{
		$hasPreCond = false;
		$hasPostCond = false;
		if(strpos($f, "function pre$functionName(")>0)
		{
			$hasPreCond = true;
		}
		if(strpos($f,"function post$functionName(")>0)
		{
			$hasPostCond = true;
		}
		if($hasPreCond || $hasPostCond)
		{
			$funcDef = $m[0][$key];
			$newFunc = "function $functionName(".$m[2][$key].") {\n";
			if($hasPreCond){
				$newFunc .= "\$this->pre$functionName(".$m[2][$key].");\n";
			}
			$newFunc .= "\$this->__$functionName(".$m[2][$key].");\n";
			if($hasPostCond){
				$newFunc .= "\$this->post$functionName(".$m[2][$key].");\n";
			}
			$newFunc .= "}\n";
			$f = str_replace($funcDef, "$newFunc\nfunction __$functionName(".$m[2][$key].")", $f);
		}
	}
	eval("?>$f");
}

contract("democlass.php");
$d = new foo();
$d->foobar(4);