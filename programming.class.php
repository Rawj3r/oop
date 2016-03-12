<?php

require_once 'inter.interface.php';
require_once 'java.interface.php';

class Programming implements CSharp{

	public function __construct(){
		echo $this->cSharpSystanx();
		echo $this->javaSyntax();
	}

	public function cSharpSystanx(){
		return "C# is a compiled language, it is part of the .NET family";
	}

	public function javaSyntax(){
		return "Java is the most used language in the world of SOftware development and mobile development";
	}
}