<?php
class Person
{
public $name;
public $dni;

public function setName($name)
{
$this->name=$name;
}

public function setDni($dni)
{
$this->dni=$dni;
}

public function getName()
{
  return $this->name;
}

public function getDni()
{
  return $this->dni;
}

public function __construct($name,$dni)
{
$this->name=$name;
$this->dni=$dni;
}

public function print()
{
  echo "$this->name<br>";
  echo "$this->dni<br>";
}
}
?>
