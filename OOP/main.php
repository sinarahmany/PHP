<?php
//crtl+alt+c to open page in chrome 
require_once('./test/student.php');
require_once('./test/collegeStudent.php');

//the output is reverse cause of stack the first goes in the last comes out
$sina = new Student("Sina","Rahmany");
$charelle = new Student("Charelle","schriek");
$jose = new Student("john","doe");
$mariana = new collegeStudent("Mariana","v","ITD");


//$ansi = clone $sina;
//if you change the name of sina after the clone it will not change for the ansi it will only change for sina 

//but if $ansi = $sina if you change the name of any of them the name of the other one will change !!!!!!!
$sina->greeting();
//unset to kill sina first
unset($sina);

echo Student::$instanceCount;
//difrence between static and self is only in extended class the static shows itself but self shows the parent