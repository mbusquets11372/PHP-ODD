<?php
//constans globals
define('MENJADOR',array('casa','a la carta','buffet','no'));

class Accommodation
{
//propietats
public $numHabit;
private $menjador;

//setters
protected function setnumHabit($numHabit)
{
  $this->numHabit=$numHabit;
}
protected function setmenjador($menjador)
{
  $this->menjador=$menjador;
}

//getters
protected function getnumHabit()
{
  return $this->numHabit;
}
protected function getmenjador()
{
  return $this->menjador;
}

//construct
public function __construct($numHabit,$menjador)
{
  $this->numHabit=$numHabit;
  $this->menjador=$menjador;
}

//function checkin
public function checkIn()
{
  $this->numHabit=--$this->numHabit;
}

//function checkout
public function checkOut()
{
  $this->numHabit=++$this->numHabit;
}

}
 ?>
