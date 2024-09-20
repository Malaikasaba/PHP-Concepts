<?php
// Constant Variables in Php
// Syntax of Constant Variables in Php
// define(name,value, case-sensitive)
/*
define(num,500,true);
define(_num,500);
When Constant Variables are defined they became global variables in Php. 
*/

define("test",50);
echo "The test result is: ", test."<br>";

# Also we cna write constants as:
 define("_data", 45);
 echo  "Data value is: ", _data."<br>";

$sum = test + 40;
echo "The new result of test is: ", $sum. "<br>";

// Using 3rd parameter (case-sensitive)
define("section","A",true);
echo Section;  // case-sensitive parameter allows us to do this [section-Section]

?>