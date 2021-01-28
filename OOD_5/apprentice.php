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

  public function print()
  {
    parent::print();
    echo "<b>Institut:</b>$this->FCTBusinessName<br>";
  }
}
?>
