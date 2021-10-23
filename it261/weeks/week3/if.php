<?php

// if statement
$temp = 91;
if($temp <= 90) {
    echo 'Not that hot';
} else {
    echo 'It\'s a scorcher';
}
echo '<br>';

// ifelse statement
$temp = 84;
if($temp <= 78) {
    echo 'It is liveable';
} elseif ($temp <= 85) {
    echo 'It\'s getting hotter';
} else {
    echo 'It\'s really hot';
}
echo '<br>';

$sales = 599000;
$salary = 200000;

if($sales >= 800000) {
    $salary *= 1.10;
    echo $salary;
} elseif ($sales >= 600000) {
    $salary *= 1.05;
    echo $salary;
} else {
    echo $salary;
}