<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['spots.php'] = 'The Spots';
$nav['contact.php'] = 'Contact';

function my_nav($nav) {
$my_return = '';
foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        $my_return .= '<li><a href="'.$key.'" class="current"> '.$value.' </a></li>';
    } else {
        $my_return .= '<li><a href="'.$key.'"> '.$value.' </a></li>';
    } // end else
} // end foreach
return $my_return;
} // end function



switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home';
        $body = 'home';
        $headline = "Home";
    break;

    case 'about.php':
        $title = 'About';
        $body = 'about inner';
        $headline = "About";
    break;

    case 'daily.php':
        $title = 'Daily';
        $body = 'daily inner';
        $headline = "Daily Drinks";
    break;

    case 'spots.php':
        $title = 'The Spot';
        $body = 'projects inner';
        $headline = "The Spot";
    break;

    case 'contact.php':
        $title = 'Contact page';
        $body = 'contact inner';
        $headline = "Contact Me";
    break;

    case 'thx.php':
        $title = 'Thanks!';
        $body = 'contact inner';
        $headline = "Your form was submitted. Thank you for filling out of our form!";
    break;
}

// switch
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch
switch($today) {
    case 'Sunday' : 
        $anime = '<h2>Sunday is "Boba" Day!</h2>';
        $pic = 'boba.jpg';
        $alt = 'Boba';
        $content = 'Bubble tea is a tea-based drink that originated in Taiwan in the early 1980s. It most 
        commonly consists of tea accompanied by chewy tapioca balls, but it can be made with other toppings 
        as well.';
    break;
    
    case 'Monday' : 
        $anime = '<h2>Monday is "Milk Tea" Day!</h2>';
        $pic = 'milktea.jpg';
        $alt = 'Milk Tea';
        $content = 'Milk tea refers to several forms of beverage found in many cultures, containing some 
        combination of tea and milk. Beverages vary based on the amount of each of these key ingredients, 
        the method of preparation, and the inclusion of other ingredients (varying from sugar or honey to 
        salt or cardamom).';
    break;
    
    case 'Tuesday' : 
        $anime = '<h2>Tuesday is "Fruit Tea" Day!</h2>';
        $pic = 'fruittea.jpg';
        $alt = 'Mango Tea';
        $content = 'Fruit tea is an infusion made from cut pieces of fruit and plants, which can either be fresh or dried.
        Fruit tea is a tea-like beverage as it is not produced using the same traditional method as for green tea or black tea.';
    break;
    
    case 'Wednesday' : 
        $anime = '<h2>Wednesday is "Latte" Day!</h2>';
        $pic = 'latte.jpg';
        $alt = 'Latte';
        $content = 'Caffè latte, often shortened to just latte in English, is a coffee drink of Italian origin made with 
        espresso and steamed milk.';
    break;
    
    case 'Thursday' : 
        $anime = '<h2>Thursday is "Parfait" Day!</h2>';
        $pic = 'parfait.jpg';
        $alt = 'Parfaits';
        $content = 'Parfait is a cold dessert made of layers of fruit, syrup, ice cream, and whipped cream, and typically 
        served in a tall glass.';
    break;
    
    case 'Friday' : 
        $anime = '<h2>Friday is "Tea Slush" Day!</h2>';
        $pic = 'slush.jpg';
        $alt = 'Strawberry Slush';
        $content = 'A slushy, sometimes spelt as slushie and slushee, also commonly referred to as a slush, frozen beverage, 
        or frozen drink, is a type of beverage made of flavored ice and a drink, commonly soda, similar to granitas. A slushy 
        can either be carbonated or non-carbonated. 
        <br><br>A tea slush would be a slushy with tea as its flavor/main ingredient.';
    break;
    
    case 'Saturday' : 
        $anime = '<h2>Saturday is "Tea" Day!</h2>';
        $pic = 'tea.jpg';
        $alt = 'Tea';
        $content = 'Tea is an aromatic beverage prepared by pouring hot or boiling water over cured or fresh leaves of Camellia 
        sinensis, an evergreen shrub native to China and other East Asian countries. After water, it is the most widely consumed 
        drink in the world.';
    break;
    }

// emailable form php

$name = '';
$email = '';
$addiction = '';
$drink = '';
$spots = '';
$comments = '';

$name_Err = '';
$email_Err = '';
$addiction_Err = '';
$drink_Err = '';
$spots_Err = '';
$comments_Err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if (empty($_POST['name'])) {
    $name_Err = 'Please fill out your name!';  
} else {
    $name = $_POST['name'];
}

if (empty($_POST['email'])) {
    $email_Err = 'Please fill out your email!'; 
    unset($_POST['email']); 
} else {
    $email = $_POST['email'];
}

if (empty($_POST['addiction'])) {
    $addiction_Err = 'You MUST choose an option!';  
} else {
    $addiction = $_POST['addiction'];
}

if ($_POST['drink'] == NULL) {
    $drink_Err = 'Please select your drink!';  
} else {
    $drink = $_POST['drink'];
}

if (empty($_POST['spots'])) {
    $spots_Err = 'Please choose your spots!';  
} else {
    $spots = $_POST['spots'];
}

if (empty($_POST['comments'])) {
    $comments_Err = 'Please share your comments with us!';  
} else {
    $comments = $_POST['comments'];
}


function my_spots() {
    $my_return = '';
    if (!empty($_POST['spots'])) {
        $my_return = implode(', ', $_POST['spots'] );
    }
    return $my_return;
} // closes function


if(isset(
    $_POST['name'],
    $_POST['email'],
    $_POST['drink'],
    $_POST['spots'],
    $_POST['comments'],
    $_POST['addiction']
)) {

$to = 'szemeo@mystudentswa.com';
$subject = 'Message, ' .date('m/d/y') ;
$body = '
Name: '.$name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Drink: '.$drink.' '.PHP_EOL.'
Spots: '.my_spots().' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
';

$headers = array(
'from' => 'noreply@hananeo.com',
'Reply-to' => ''.$email.'',
);

mail($to, $subject, $body, $headers);
header('Location: thx.php');

}

}


// project

$name = '';
$email = '';
$username = '';
$password = '';
$success = 'You have successfully logged in!';
$errors = array();


function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}

