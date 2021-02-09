<?php

//constans globals
define('EATING_CAPABILITY',array('meat','vegs','meat and vegs'));
define('MOVING_CAPABILITY',array('walk','fly'));
define('SPEAKING_CAPABILITY',array('guau','miau','language'));
define('HEATH_CONDITION',array('Excellent','good','in need of treatment'));

class LivingBeing
{
//constans de classe
Const GENDER=array('female','male');
Const STATUS=array('awake','sleeping');
Const BEST_SENSE=array('eyesight','smell','hearing','touch');

//propietats
public $age;  //available from everywhere
private $status;  //available from current class only
private $gender;  //available from current class only
private $eatingCapability;  //available from current class only
private $movingCapability;  //available from current class only
private $speakingCapability;  //available from current class only

//setters
protected function setAge($age)
{
  $this->age=$age;
}

protected function setStatus($status)
{
  $this->status=$status;
}

protected function setGender($gender)
{
  $this->gender=$gender;
}

protected function setEatingCapability($eatingCapability)
{
  $this->eatingCapability=$eatingCapability;
}

protected function setMovingCapability($movingCapability)
{
  $this->movingCapability=$movingCapability;
}

protected function setSpeakingCapability($speakingCapability)
{
  $this->speakingCapability=$speakingCapability;
}

//getters
protected function getAge()
{
  return $this->age;
}

protected function getStatus()
{
  return $this->status;
}

protected function getGender()
{
  return $this->gender;
}

protected function getEatingCapability()
{
  return $this->eatingCapability;
}

protected function getMovingCapability()
{
  return $this->movingCapability;
}

protected function getSpeakingCapability()
{
  return $this->speakingCapability;
}

//function method
function oneYearOlder()
  {
    $this->Age=++$this->Age;
  }
}

?>
