<?php
class Student extends Person
{
//propietat
private $studyField;

//setter
public function setStudyField($studyField)
{
  $this->studyField=$studyField;
}

//getter
public function getStudyField()
{
  return $this->studyField;
}

//construct
public function __construct($name,$dni,$studyField)
{
  parent::__construct($name,$dni);
  $this->studyField=$studyField;
}

//print
public function print()//overriding print method from parent class Person
{
  parent::print();//calling print method from parent class Person
  echo "<br>This student is enrolled in $this->studyField.<br>";
}
}
?>
