<?php
// Switch Statements in Php
// Syntax 01
switch(expression){
    case condition 1: statements(s)
    break;
    case condition 2: statements(s)
    break;
    case condition 3: statements(s)
    break;
    case condition 4: statements(s)
    break;
    default:statements(s)
}
// Syntax 02
switch(expression):
    case condition 1: statements(s)
    break;
    case condition 2: statements(s)
    break;
    case condition 3: statements(s)
    break;
    case condition 4: statements(s)
    break;
    default:statements(s)
    endswitch;


// Examples 1st way

$weekDay = 3;
switch($weekDay){
    case 1:
        echo "Today is Monday";
    break;
    case 2:
        echo "Today is Tuesday";
    break;
    case 3:
        echo "Today is Wednesday";
    break;
    case 4:
        echo "Today is Thursday";
    break;
    case 5:
        echo "Today is Friday";
    break;
    case 6:
        echo "Today is Saturday";
    break;
    case 7:
        echo "Today is Sunday";
    break;
    default:
        echo "Enter the valid week day";
        
}

// 2nd way
$weekDay = 3;
switch($weekDay):
    case 1:
        echo "Today is Monday";
    break;
    case 2:
        echo "Today is Tuesday";
    break;
    case 3:
        echo "Today is Wednesday";
    break;
    case 4:
        echo "Today is Thursday";
    break;
    case 5:
        echo "Today is Friday";
    break;
    case 6:
        echo "Today is Saturday";
    break;
    case 7:
        echo "Today is Sunday";
    break;
    default:
        echo "Enter the valid week day";
    
    endswitch;

    // Example 02

    $marks = 80;
    switch($marks){
        case 1: case 2: case 3:
            echo "you are pass";
        break;
    }

    // Example 03
    $age = 30;
    switch(true){
        case ($age >= 1 && $age <= 8):
            echo "you are a child";
        break;
        case ($age >= 8 && $age <= 18):
            echo "you are  teenager";
        break;
        case ($age >= 18 && $age <= 35):
            echo "you are adult";
        break;
        case ($age >= 35 && $age <= 55):
            echo "you are  pata nahi";
        break;
        case ($age >= 55 && $age <= 75):
            echo "you are  akhabeer";
        break;
        case ($age >= 75 && $age <= 110):
            echo "you are   very akhabeer";
        break;
        case ($age >= 110):
            echo "Why you are still alive";
        break;
        
    }

?>