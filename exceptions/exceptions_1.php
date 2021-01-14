<?php
echo "<br>-------------------1. Sense emplear exceptions---------------------------</br>";
//1. Sense emplear exceptions
function discountCalculation_sense($discount,$percentage,$price){
  //calculate the final amount after applying the discount and return it
  //considering $discount as a %

  if($percentage!=0)
  {
  $discountCalculation=($price * $discount)/$percentage;

  return $price - $discountCalculation;
  }
  return "El valor ha de ser major a 0";
}

echo discountCalculation_sense(50,100,50);

echo "<br><br>----------------------2. Empleant exceptions-----------------------------</br>";

//-------------------2. Empleant exceptions--------------------------
function discountCalculation($discount,$percentage,$price){
  //calculate the final amount after applying the discount and return it
  //considering $discount as a %

  if($percentage==0)
    throw new Exception('Divisió per zero.');
  else
  $discountCalculation1=($price * $discount)/$percentage;

  return $price - $discountCalculation1;
}

try {
  $discount=10;
  $percentage=0;
  $price=50;
  echo discountCalculation($discount,$percentage,$price);

}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}
?>
