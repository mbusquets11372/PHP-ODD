<?php
class Teacher extends Person

{
public $salary;

public function setSalary($salary)
{
$this->salary=$salary;
}

public function getSalary()
{
  return $this->salary;
}

public function __construct($name,$dni,$salary)
{
  parent::__construct($name,$dni);
  $this->salary=$salary;
}

public function print()
{
  parent::print();
  echo "<b>Salari:</b>$this->salary<br><br>";
}
}
?>
