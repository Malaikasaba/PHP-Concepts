<?php

// if-statement in php

/* if(condition){
    statement
    ALSO
    if(condition){
endif;
}*/

// Example 01
$x =  20;
if($x > 10){
    echo "x is greater";
}

// Example 02
$a = 10;
$b = 20;
if($a < $b){
    echo "A is smaller then B";
}

// Example
$c = 5;
$d = 30;
if($c == $d):
    echo "C and D are equal";
endif;
?>