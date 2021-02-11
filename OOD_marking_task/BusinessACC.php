<?php
class BusinessAcc extends Accommodation
{
  //constans de classe
  Const SALES=array('reunions','audio visuals','internet','no');

  //propietats
  private $sales;

  //setters
  protected function setsales($sales)
  {
    $this->sales=$sales;
  }

  //getters
  protected function getsales()
  {
    return $this->sales;
  }

  //construct
  public function __construct($numHabit,$menjador)
  {
   parent::__construct($numHabit,$menjador);
  }

  //function checkin
  public function checkIn()
  {
    if ($this->numHabit==0)
      throw new Exception('check-in Error: Hotel complet. Operació no permesa<br>');
    else
      $this->numHabit=--$this->numHabit;
      echo "check-in successful<br>";
  }
}
?>
