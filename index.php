<?php 
require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new Animal("shaun");
//get
echo $sheep->getname() . "<br>";
echo $sheep->getlegs() . "<br>";
echo $sheep->getcold_blooded() . "<br>";


$sungokong = new Ape("kera sakti");
//get
// echo $sungokong->getname() . "<br>"; // kera sakti
echo $sungokong->getyell() . "<br>"; // "Auooo"


$kodok = new Frog("buduk");
//get
// echo $kodok->getname() . "<br>"; // buduk
echo $kodok->getjump() . "<br>"; // "hop hop"

// echo $kodok->getlegs() . "<br>"; // 4
// echo $sungokong->getlegs() . "<br>"; // 2 
// echo $kodok->getcold_blooded() . "<br>"; // false
// echo $sungokong->getcold_blooded() . "<br>"; // false

?>