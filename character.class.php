<?php

abstract class Character{

	//instance variables
	protected $hp = 100;
	protected $dmg = 10;
	protected $armor = 10;

	protected function __construct(){
		echo 'The character was created';
	}

	public function attack(){
		return "We attacked for $this->dmg";
	}

}