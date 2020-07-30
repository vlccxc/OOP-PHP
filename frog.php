<?php 

class Frog extends Animal{
	private $jump = "hop hop";
	private $legs = 4;

	public function setjump($jump){
		$this->jump = $jump;
	}
	public function getjump(){
		return $this->jump;
	}
	public function setlegs($legs){
		$this->legs = $legs;
	}
	public function getlegs(){
		return $this->legs;
	}
	
}

?>