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
public function __construct($healthCondition,$bestSense,$age)
{
  $this->healthCondition=$healthCondition;
  $this->bestSense=$bestSense;
  parent::setAge($age);
  /*$this->healthCondition=HEATH_CONDITION[0];
  $this->bestSense=(parent::BEST_SENSE[0]);*/
}

//function next birthday
public function NextBirthday(){
  $this->age=$this->age*2;
}

//function +1
function oneYearOlder()
{
  if ($this->age>50)
    throw new Exception('Error: Age value too high');
  else
    Cat::NextBirthday();
    echo "I'm a cat, i will be<b> ".$this->age."</b> my next birthay<br><br>";
}

//print
public function print()
{
  echo "I'm a cat in <b>".$this->gethealthCondition()."</b> condition of health<br>";
  echo "and my best sense is <b>".$this->getbestSense()."</b> my age is ".$this->getAge()."<br>";
}

}
?>
