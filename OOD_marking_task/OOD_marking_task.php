<HTML>
<head>
<title>Examen OOD Marti</title>
</head>
<body>
<?php
require "Accommodation.php";
require "RuralAcc.php";
require "BusinessACC.php";

$crida=new RuralAcc(10,MENJADOR[0],true,RuralAcc::INST_AIRE_LLUIRE[2]);

$crida2=new BusinessAcc(1,MENJADOR[1]);

try {
  $crida2->checkIn();
  $crida2->checkIn();
}
catch (Exception $e) {
    echo "Exception message is: " . $e->getMessage() . "<br><br>";
}

?>
