<?php

class Dragon extends Character{

	public function __construct(){
		parent::__construct();
	}

	public function setUp($hp, $dmg, $armor){
		$this->hp = $hp;
		$this->dmg = $dmg;
		$this->armor = $armor;
	}
}