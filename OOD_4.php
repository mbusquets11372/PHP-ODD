<HTML>
<head>
<title>OOD_4: Marti</title>
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
  function __construct($euros,$exchange){
    $this->euros=$euros;
    $this->exchange=$exchange;
  }
  //print
  function print(){
    echo "<strong>Euros:</strong> " . $this->getEuros();
    echo "<br>";
    echo "<strong>Exchange:</strong> " . $this->getExchange();
    echo "<br>";
    echo "<strong>Pounds:</strong> " . $this->getPounds();
  }
  //function conversio
  public function ConvertPoundsToEuros(){
    $this->pounds=$this->euros*$this->exchange;
    return $this->pounds;
  }

}//end class Student

//---------------Declarant variables abans de cridar-------------------
$euros=70;
$exchange=0.89;
echo "Declarant variables abans de cridar<br>";
$converter = new CurrencyConverter($euros,$exchange);
if($exchange>0)
  $converter-> ConvertPoundsToEuros();
else {
  echo "The exchange rate ha de ser mes gran de 0 <br>";
}
$converter-> print();

//--------------------Agafar variables de la clase--------------------
echo "<br><br>Agafar variables de la clase<br>";
$converter = new CurrencyConverter(50,0.89);
if($converter->exchange>0)
  $converter-> ConvertPoundsToEuros();
else {
  echo "The exchange rate ha de ser mes gran de 0 <br>";
}
$converter-> print();
?>
</body>
</HTML>
