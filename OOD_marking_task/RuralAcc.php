<?php
//constans globals
define('TIPUS_ACTIVITATS',array('senderisme','equitacio','ciclisme'));

class RuralAcc extends Accommodation
{
  //constans de classe
  Const INST_AIRE_LLUIRE=array('jardi','muntanya','platja');

  //propietats
  private $orgActivitats;
  private $instAireLliure;

  //setters
  protected function setorgActivitats($orgActivitats)
  {
    $this->orgActivitats=$orgActivitats;
  }
  protected function setinstAireLliure($instAireLliure)
  {
    $this->instAireLliure=$instAireLliure;
  }

  //getters
  protected function getorgActivitats()
  {
    return $this->orgActivitats;
  }
  protected function getinstAireLliure()
  {
    return $this->instAireLliure;
  }

  //construct
  public function __construct($numHabit,$menjador,$orgActivitats,$instAireLliure)
  {
    parent::__construct($numHabit,$menjador);
    $this->orgActivitats=$orgActivitats;
    $this->instAireLliure=$instAireLliure;
  }


}
?>
