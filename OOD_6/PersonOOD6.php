<?php
class PersonOOD6 extends LivingBeing
{
private $fullName;

//setters
protected function setfullName($fullName)
{
  $this->fullName=$fullName;
}

//getters
protected function getfullName()
{
  return $this->fullName;
}

//construct
public function __construct($fullName)
{
  $this->fullName=$fullName;
  parent::setAge(20);
  parent::oneYearOlder();
  parent::setStatus(parent::STATUS[0]);
  parent::setGender(parent::GENDER[1]);
  parent::setEatingCapability(EATING_CAPABILITY[0]);
  parent::setMovingCapability(MOVING_CAPABILITY[0]);
  parent::setSpeakingCapability(SPEAKING_CAPABILITY[2]);
}

//print
public function print()
{
  echo "I'm ".$this->getFullName()."<br>";
  echo "I'm ".$this->getAge()." and<br>";
  echo "I can talk a ".$this->getSpeakingCapability()."<br>";
  echo "eat ".$this->getEatingCapability()."<br>";
  echo "and ".$this->getMovingCapability()."<br>";
  echo "My status is ".$this->getStatus()."<br>";
  echo "My gender is ".$this->getGender()."<br>";
}
}
?>
