<?php
class Cat extends LivingBeing
{
private $healthCondition;
private $bestSense;

//setters
protected function sethealthCondition($healthCondition)
{
  $this->healthCondition=$healthCondition;
}

protected function setbestSense($bestSense)
{
  $this->bestSense=$bestSense;
}

//getters
protected function gethealthCondition()
{
  return $this->healthCondition;
}

protected function getbestSense()
{
  return $this->bestSense;
}

//construct
public function __construct($age)
{
  parent::setAge($age);
  $this->healthCondition=HEATH_CONDITION[0];
  $this->bestSense=(parent::BEST_SENSE[0]);
}

//print
public function print()
{
  echo "I'm a cat in <b>".$this->gethealthCondition()."</b> condition of health<br>";
  echo "and my best sense is <b>".$this->getbestSense()."</b> my age is ".$this->getAge()."<br>";
  echo parent::oneYearOlder();
}

}
?>
