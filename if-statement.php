<?php

//  if and if-statement in php

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


// If-else Statement 
// Syntax 
/*
if(condition True){
Statement for True
}else{
Statement for False
}
*/

// Example
$x = 20;
if($x > 10){
    echo "X is greater";
}else{
    echo "X is smaller";
}

// if-else and else-if statement
// Syntax
/*
if(contion1){
statement 1
}elseif(condition 2){
statement 2
}else{
Default statement 
}
*/

// Also this syntax fie else-if and endif
if(condition 1):
elseif(condition 2):
else:
endif;


// Examples
$grade = 89;
if($grade >= 80 && $grade <= 100){
    echo " Grade A1";
}elseif($grade >= 70 && $grade <= 80){
    echo " Grade A";
}elseif($grade >= 60 && $grade <= 70){
    echo " Grade B";
}elseif($grade >= 50 && $grade <= 60){
    echo " Grade C";
}elseif($grade >= 0 && $grade <= 50){
    echo "You are Fail";
}else{
    echo "Please enter the valid percentage";
}
// Second Way
$marks = 80;
if($marks >= 80 && $marks <= 100):
    echo " Grade A1";
elseif($marks >= 70 && $marks <= 80):
    echo " Grade A";
elseif($marks >= 60 && $marks <= 70):
    echo " Grade B";
:elseif($marks >= 50 && $marks <= 60):
    echo " Grade C";
elseif($marks >= 0 && $marks <= 50):
    echo "You are Fail";
else:
    echo "Please enter the valid percentage";
endif;


?>

