<html>
<head>
<title>OOD_5: inheritance example</title>
</head>
<body>
<?php
require "person.php";//similar to include
require "student.php";
require "teacher.php";
require "apprentice.php";

$teacher1=new Teacher('Rose','12345678A',1500);//using __construct from Person
$teacher1->setSalary(10);
$student1=new Apprentice('Marti','41583243L','ASIX','Ies Manacor');
$student2=new Apprentice('Pauline','34755295L','WEB','Ies PortoCristo');

echo $teacher1->print();//using method print implemented on Person class
echo $student1->print();//using method print implemented on Student class
echo $student2->print();//using method print implemented on Student class

 ?>
</body>
</html>
