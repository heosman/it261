<?php
$name = 'Hanan';
$weather = 'Today is a rainy day';
$body_temp = 98.6;

echo $name;
echo '<br>';

/* echo 'My name is $name';
echo '<br>';
echo "My name is $name";
echo '<br>';
*/
echo 'My name is '.$name.' ';
echo '<br>';
echo $weather;
//echo '<br>';
// echo $body_temp;
echo '<br>';
echo 'The normal body temperature is '.$body_temp.' and all is well!';
echo '<br>';
$name = "Sharon";
echo $name;
echo '<br>';

echo '<br>';
$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x + $y;
echo $z;
echo '<br>';
$z = $x * $y;
echo $z;
echo '<br>';

$first_name = 'Hanan';
$last_name = 'Osman';

/*
echo $first_name.' '.$last_name;
echo '<br>';
echo ' '.$first_name.' '.$last_name.' ';
echo '<br>';
echo 'Here are the names with a single quote! '.$first_name.' '.$last_name.' ';
echo '<br>';
echo "Here are the names with double quotes! $first_name$last_name";
echo '<br>';
$name = 'Hanan';
$name .= ' Osman';
echo $name;
echo '<br>';
*/

$x = 20;
$x *= 2;
echo $x;
echo '<br>';

$x = 120;
$x /= 2;
echo $x;
echo '<br>';

$x = 120;
$x *= .9;
echo $x;
echo '<br>';

// functions

    // number format
    $x = 137;
    $x /= 4;
    $friendly_x = number_format($x, 1);
    echo $friendly_x;
    echo '<br>';
    echo '<br>';

    // date
    echo date('Y');
    echo '<br>';

    echo date('l');
    echo '<br>';
    echo '<br>';


// arrays

$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'grapes';
$fruit[] = 'apples';
$fruit[] = 'cherries';

/*
echo $fruit[3];
echo '<br>';
*/

$fruit = array (
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries'
);

$fruit = [
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries',
    'strawberries'
];

/* 
echo $fruit;
echo '<br>';
*/

print_r($fruit);
echo '<br>';

var_dump($fruit);
echo '<br>';

/* another array
$nav[]= 'Home';
$nav[]= 'About';
$nav[]= 'Daily';
$nav[]= 'Contact';
$nav[]= 'Gallery';

echo $nav[0];
echo '<br>';

// asociative array

$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

$nav= array(
    'index.php'=> 'Home',
    'about.php'=> 'About',
    'daily.php'=> 'Daily',
    'contact.php'=> 'Contact',
    'gallery.php'=> 'Gallery'
);
echo '<pre>';
var_dump($nav);
echo '</pre>';
echo '<br>';
*/
echo '<br>';
$show = 'Anne with an E';
$show_actor = 'Amybeth McNulty';
$show_genre = 'period drama';

echo 'My favorite series during 2021 was "'.$show.'", starring '.$show_actor.', and it is a '.$show_genre.'. ';