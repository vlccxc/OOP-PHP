<?php 

class Ape extends Animal{
	private $yell = "Auooo";

	public function setyell($yell){
		$this->yell = $yell;
	}
	public function getyell(){
		return $this->yell;
	}
}

?>