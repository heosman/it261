<?php

$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';

$a = '708';
$b = '338';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a * $b;
echo $c;
echo '<br>';

$money = 100;
$money /= 7;
// functions
$friendly_money = number_format($money, 2);
echo $friendly_money;
echo '<br>';
    // rounding down
    $friendly_money = floor($money);
    echo '$'.$friendly_money.'';
    echo '<br>';
    // rounding up
    $friendly_money = ceil($money);
    echo '$'.$friendly_money.'';
    echo '<br>';

// Logic & calculators
    // circumference
    $radius = '10';
    $pi = 3.14;
    $circumference = (2 * $pi) * $radius;
    echo $circumference;
    echo '<br>';
    // celcius to farenheit
    $celcius = 22;
    $far = ($celcius * 9/5) + 32;
    $friendly_far = floor($far);
    echo ''.$friendly_far.' degrees';
    echo '<br>';
    // exchange rate 
    $canada = 100;
    $canada += .79;
    $friendly_canada = ceil($canada);
    echo '<p>I have <b>$'.$friendly_canada.'</b> American dollars!</p>' ;