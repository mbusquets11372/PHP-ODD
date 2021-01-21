<HTML>
<head>
<title>OOD_3: Marti</title>
</head>
<body>

<?php
class CurrencyConverter
{
  //propietats
  var $euros;
  var $exchange;
  var $pounds;

  //setters
  public function setEuros($euros)
  {
    $this->euros=$euros;
  }

  public function setExchange($exchange)
  {
    $this->exchange=$exchange;
  }

  public function setPounds($pounds)
  {
    $this->pounds=$pounds;
  }


  //getters
  public function getEuros()
  {
    return $this->euros;
  }

  public function getExchange()
  {
    return $this->exchange;
  }

  public function getPounds()
  {
    return $this->pounds;
  }

  //constructor
  function __construct($euros,$exchange,$pounds){
    $this->euros=$euros;
    $this->exchange=$exchange;
    $this->pounds=$pounds;
  }
  //print
  function print(){
    echo "<strong>Euros:</strong> " . $this->getEuros();
    echo "<br>";
    echo "<strong>Exchange:</strong> " . $this->getExchange();
    echo "<br>";
    echo "<strong>Pounds:</strong> " . $this->getPounds();
  }
}//end class Student

$converter = new CurrencyConverter(10,0.89,8.86);
$converter-> print();
?>
</body>
</HTML>
