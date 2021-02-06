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
$cat1=new Cat(50);
$cat1->print();

//major de 50
$cat2=new Cat(75);
$cat2->print();

?>
</body>
</html>
