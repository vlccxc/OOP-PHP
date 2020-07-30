<?php 
class Animal {
	private $name;
	private $legs = 2;
	private $cold_blooded = FALSE;

	function __construct($name){
		$this->name = $name;
	}
	public function getname(){
		return $this->name;
	}
	public function setlegs($legs){
		$this->legs = $legs;
	}
	public function getlegs(){
		return $this->legs;
	}
	public function setcold_blooded($cold_blooded){
		$this->cold_blooded = $cold_blooded;
	}
	public function getcold_blooded(){
		echo "false";
		return $this->cold_blooded;
	}
}

?>

