<?php

// Logical Operators in Php
// 01) && Logical AND       if(condition1 && condition1){statement} Both conditions should be true
// 02) || Logical OR        if(condition1 || condition1){statement} Atleast one condition should be true
// 03) !  logical NOT       if!(condition1){statement} Converts True into False and vice versa
// 04) AND Logical AND      if(condition1 AND condition1){statement} 
// 05) OR  Logical OR       if(condition1 OR condition1){statement}
// 06) XOR Exclusive OR     if(condition1 XOR condition1){statement}  one condition must be true, e.g., True-False --> true 

// Examples
$age = 21;
if($age > 18 && age <= 81){
    echo "He/She can vote";
}
?>