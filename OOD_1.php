<HTML>
<head>
<title>OOD_1: Student class: setters and getters</title>
</head>
<body>

<?php
class Student
{
  var $name;
  var $dni;
  var $surname1;
  var $surname2;
  var $age;

  //setters
  public function setName($name)
  {
    $this->name=$name;
  }

  public function setDni($dni)
  {
    $this->dni=$dni;
  }

  public function setSurname1($surname1)
  {
    $this->surname1=$surname1;
  }

  public function setSurname2($surname2)
  {
    $this->surname2=$surname2;
  }

  public function setAge($age)
  {
    $this->age=$age;
  }

  //getters
  public function getName()
  {
    return $this->name;
  }

  public function getDni()
  {
    return $this->dni;
  }

  public function getSurname1()
  {
    return $this->surname1;
  }

  public function getSurname2()
  {
    return $this->surname2;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function print()
  {
  echo "Name: $this->name <br>";
  echo "Surname1:". $this->getSurname1()."<br>";
  echo "Surname2:". $this->getSurname2()."<br>";
  echo "Dni: $this->dni <br>";
  echo "Age:". $this->getAge()."<br><br>";
  }

}//end class Student

$alumne1=new Student();//creating object using a default constructor
$alumne1->setName('Imena');
$alumne1->setSurname1('Perez');
$alumne1->setSurname2('Mayol');
$alumne1->setDni('23344556D');
$alumne1->setAge(19);
$alumne1->print();

$alumne2=new Student();//creating object using a default constructor
$alumne2->setName('Joan');
$alumne2->setSurname1('Juliano');
$alumne2->setSurname2('Mayol');
$alumne2->setDni('34244556D');
$alumne2->setAge(9);
$alumne2->print();
?>
</body>
</HTML>
