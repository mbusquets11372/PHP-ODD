<?php
class Apprentice extends Student

{
  private $FCTBusinessName;

  public function setFCTBusinessName($FCTBusinessName)
  {
  $this->FCTBusinessName=$FCTBusinessName;
  }

  public function getFCTBusinessName($FCTBusinessName)
  {
  return $this->FCTBusinessName;
  }

  public function __construct($name,$dni,$studyField,$FCTBusinessName)
  {
    parent::__construct($name,$dni,$studyField);
    $this->FCTBusinessName=$FCTBusinessName;
  }

  public function print()
  {
    parent::print();
    echo "This apprentice FCT Business company is $this->FCTBusinessName<br><br>";
  }
}
?>
