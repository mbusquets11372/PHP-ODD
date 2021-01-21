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

  //constructor
  function __construct($name,$surname1,$surname2,$dni,$age){
    $this->name=$name;
    $this->surname1=$surname1;
    $this->surname2=$surname2;
    $this->dni=$dni;
    $this->age=$age;
  }
}//end class Student

$persona = new Student('Marti','Busquets','Prohens','342143132D',20);
echo "<strong>Name:</strong> " . $persona->getName();
echo "<br>";
echo "<strong>Surname1:</strong> " . $persona->getSurname1();
echo "<br>";
echo "<strong>Surnam2:</strong> " . $persona->getSurname2();
echo "<br>";
echo "<strong>Dni:</strong> " . $persona->getDni();
echo "<br>";
echo "<strong>Age:</strong> " . $persona->getAge();
?>
</body>
</HTML>
