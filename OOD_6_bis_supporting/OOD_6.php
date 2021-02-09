<HTML>
<head>
<title>OOD_6: inheritance Marti</title>
</head>
<body>
<?php
require "LivingBeing.php";
require "PersonOOD6.php";
require "Cat.php";

//menor o igual de 50
$cat1=new Cat(HEATH_CONDITION[0],LivingBeing::BEST_SENSE[0],50);
$cat1->print();

try {
  $cat1->oneYearOlder();
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br><br>";
}


//major de 50
$cat2=new Cat(HEATH_CONDITION[0],LivingBeing::BEST_SENSE[0],55);
$cat2->print();

try {
  $cat2->oneYearOlder();
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br><br>";
}

?>
</body>
</html>
