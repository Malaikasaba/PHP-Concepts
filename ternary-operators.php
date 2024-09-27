<?php
// Conditional Ternary Operators

// Syntax
// (condition)? True Statement : False Statement;

// Example
    $x = 25;
    ($x>10)? $z = "True": $z = "False";
    echo $z;

    $y = 33;
    $a = "Value is :" .($y > 50 ? "Greater" : "Smaller");
    echo $a;
?>