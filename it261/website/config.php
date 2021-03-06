<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['cats.php'] = 'Cats';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

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
        $title = 'Home page';
        $body = 'home';
        $headline = "Welcome to my IT 261 website!";
    break;

    case 'about.php':
        $title = 'About page';
        $body = 'about inner';
        $headline = "Welcome to my About page!";
    break;

    case 'daily.php':
        $title = 'Daily page';
        $body = 'daily inner';
        $headline = "Welcome to my Daily page!";
    break;

    case 'cats.php':
        $title = 'Cats <3';
        $body = 'projects inner';
        $headline = "Welcome to my Projects page!";
    break;

    case 'contact.php':
        $title = 'Contact page';
        $body = 'contact inner';
        $headline = "Welcome to my Contact page!";
    break;

    case 'thx.php':
        $title = 'Thanks!';
        $body = 'contact inner';
        $headline = "Your form was submitted. Thank you for filling out of our form!";
    break;

    case 'gallery.php':
        $title = 'Gallery page';
        $body = 'gallery inner';
        $headline = "Welcome to my Gallery page!";
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
        $anime = '<h2>Sunday is "Fruits Basket" Day!</h2>';
        $pic = 'fruits-basket.jpg';
        $alt = 'Fruits Basket';
        $content = 'Tohru Honda has always been fascinated by the story of the Chinese Zodiac 
        that her beloved mother told her as a child. However, a sudden family tragedy changes 
        her life, and subsequent circumstances leave her all alone. Tohru is now forced to live 
        in a tent, but little does she know that her temporary home resides on the private property 
        of the esteemed Souma family. Stumbling upon their home one day, she encounters Shigure, 
        an older Souma cousin, and Yuki, the "prince" of her school. Tohru explains that she lives 
        nearby, but the Soumas eventually discover her well-kept secret of being homeless when 
        they see her walking back to her tent one night.
        <br><br>Things start to look up for Tohru as they kindly offer to take her in after hearing 
        about her situation. But soon after, she is caught up in a fight between Yuki and his 
        hot-tempered cousin, Kyou. While trying to stop them, she learns that the Souma family 
        has a well-kept secret of their own: whenever they are hugged by a member of the opposite 
        sex, they transform into the animals of the Chinese Zodiac.
        <br><br>With this new revelation, Tooru will find that living with the Soumas is an unexpected 
        adventure filled with laughter and romance.';
        $bgcolor = 'background-color:#FFCAC9';
    break;
    
    case 'Monday' : 
        $anime = '<h2>Monday is "Inuyasha" Day!</h2>';
        $pic = 'inuyasha.jpg';
        $alt = 'Inuyasha';
        $content = 'Based on the Shogakukan award-winning manga of the same name, InuYasha follows 
        Kagome Higurashi, a fifteen-year-old girl whose normal life ends when a demon drags her into 
        a cursed well on the grounds of her family\'s Shinto shrine. Instead of hitting the bottom 
        of the well, Kagome ends up 500 years in the past during Japan\'s violent Sengoku period with 
        the demon\'s true target, a wish-granting jewel called the Shikon Jewel, reborn inside of her.
        <br><br>After a battle with a revived demon accidentally causes the sacred jewel to shatter, 
        Kagome enlists the help of a young hybrid dog-demon/human named Inuyasha to help her collect 
        the shards and prevent them from falling into the wrong hands. Joining Kagome and Inuyasha on 
        their quest are the orphan fox-demon Shippo, the intelligent monk Miroku, and the lethal demon 
        slayer Sango. Together, they must set aside their differences and work together to find the 
        power granting shards spread across feudal Japan and deal with the threats that arise.';
        $bgcolor = 'background-color:#EDCE6D';
    break;
    
    case 'Tuesday' : 
        $anime = '<h2>Tuesday is "Jujutsu Kaisen" Day!</h2>';
        $pic = 'jujutsu-kaisen.png';
        $alt = 'Jujutsu Kaisen';
        $content = 'Idly indulging in baseless paranormal activities with the Occult Club, high schooler 
        Yuuji Itadori spends his days at either the clubroom or the hospital, where he visits his bedridden 
        grandfather. However, this leisurely lifestyle soon takes a turn for the strange when he unknowingly 
        encounters a cursed item. Triggering a chain of supernatural occurrences, Yuuji finds himself 
        suddenly thrust into the world of Curses???dreadful beings formed from human malice and negativity???after 
        swallowing the said item, revealed to be a finger belonging to the demon Sukuna Ryoumen, the "King 
        of Curses."
        <br><br>Yuuji experiences first-hand the threat these Curses pose to society as he discovers his own 
        newfound powers. Introduced to the Tokyo Metropolitan Jujutsu Technical High School, he begins to 
        walk down a path from which he cannot return???the path of a Jujutsu sorcerer.';
        $bgcolor = 'background-color:#E5E587';
    break;
    
    case 'Wednesday' : 
        $anime = '<h2>Wednesday is "Devil\'s Line" Day!</h2>';
        $pic = 'devils-line.jpg';
        $alt = 'Devil\'s Line';
        $content = 'Vampires walk among society, existing as part of its underbelly. They do not require 
        blood to survive, but extreme emotions can immensely increase their bloodlust, turning them into 
        uncontrollable monsters. Tsukasa Taira, a 22-year-old university student, learns of the existence 
        of vampires when her longtime friend reveals himself to be one of them after a tense confrontation 
        with Yuuki Anzai???a human and vampire hybrid.
        <br><br>Her friend is arrested, and Tsukasa soon finds herself drawn to Anzai, who reluctantly reciprocates 
        her feelings. However, this unconventional romance may prove too difficult to maintain, as Anzai 
        struggles to contain the part of him that wishes to devour Tsukasa.';
        $bgcolor = 'background-color:#A5ED8B';
    break;
    
    case 'Thursday' : 
        $anime = '<h2>Thursday is "Vinland Saga" Day!</h2>';
        $pic = 'vinland-saga.png';
        $alt = 'Vinland Saga';
        $content = 'Young Thorfinn grew up listening to the stories of old sailors that had traveled the 
        ocean and reached the place of legend, Vinland. It\'s said to be warm and fertile, a place where 
        there would be no need for fighting???not at all like the frozen village in Iceland where he was 
        born, and certainly not like his current life as a mercenary. War is his home now. Though his father 
        once told him, "You have no enemies, nobody does. There is nobody who it\'s okay to hurt," as he 
        grew, Thorfinn knew that nothing was further from the truth.
        <br><br>The war between England and the Danes grows worse with each passing year. Death has become 
        commonplace, and the viking mercenaries are loving every moment of it. Allying with either side will 
        cause a massive swing in the balance of power, and the vikings are happy to make names for themselves 
        and take any spoils they earn along the way. Among the chaos, Thorfinn must take his revenge and kill 
        Askeladd, the man who murdered his father. The only paradise for the vikings, it seems, is the era of 
        war and death that rages on.';
        $bgcolor = 'background-color:#85F2E9';
    break;
    
    case 'Friday' : 
        $anime = '<h2>Friday is "Bungo Stray Dogs" Day!</h2>';
        $pic = 'bungo-stray-dogs.jpg';
        $alt = 'Bungo Stray Dogs';
        $content = 'For weeks, Atsushi Nakajima\'s orphanage has been plagued by a mystical tiger that only 
        he seems to be aware of. Suspected to be behind the strange incidents, the 18-year-old is abruptly 
        kicked out of the orphanage and left hungry, homeless, and wandering through the city.
        <br><br>While starving on a riverbank, Atsushi saves a rather eccentric man named Osamu Dazai from drowning. 
        Whimsical suicide enthusiast and supernatural detective, Dazai has been investigating the same tiger 
        that has been terrorizing the boy. Together with Dazai\'s partner Doppo Kunikida, they solve the mystery, 
        but its resolution leaves Atsushi in a tight spot. As various odd events take place, Atsushi is coerced 
        into joining their firm of supernatural investigators, taking on unusual cases the police cannot handle, 
        alongside his numerous enigmatic co-workers.';
        $bgcolor = 'background-color:#83ABEF';
    break;
    
    case 'Saturday' : 
        $anime = '<h2>Saturday is "Danganronpa" Day!</h2>';
        $pic = 'danganronpa.jpg';
        $alt = 'Danganronpa';
        $content = 'Hope\'s Peak Academy is an elite high school that accepts only the most talented students. 
        Individuals who successfully enroll receive their own unique titles, suitably reflective of their skills 
        and traits. Of the fifteen candidates admitted to the peculiar school that year, Makoto Naegi is a 
        completely ordinary individual who has been accepted by sheer chance, with the title of "Super High 
        School-Level Luck."
        <br><br>Naegi and his fellow classmates are initially ecstatic to be chosen to study at this prestigious 
        institution, but these feelings of happiness are short-lived. They are soon confronted by Monokuma, the 
        principal and resident bear, who traps them inside the school. The pupils\' hopes of escape and graduation 
        hinge on one of them successfully murdering one of their peers without being discovered. However, if the 
        killer is caught, he or she will be executed, and the remaining survivors will be left to continue the 
        deathmatch until only a single victor remains.';
        $bgcolor = 'background-color:#D7C9FF';
    break;
    }

// emailable form php

$first_name = '';
$last_name = '';
$email = '';
$desserts = '';
$drink = '';
$comments = '';
$privacy = '';
$phone = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$desserts_Err = '';
$drink_Err = '';
$comments_Err = '';
$privacy_Err = '';
$phone_Err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if (empty($_POST['first_name'])) {
    $first_name_Err = 'Please fill out your first name!';  
} else {
    $first_name = $_POST['first_name'];
}

if (empty($_POST['last_name'])) {
    $last_name_Err = 'Please fill out your last name!';  
} else {
    $last_name = $_POST['last_name'];
}

if (empty($_POST['email'])) {
    $email_Err = 'Please fill out your email!'; 
    unset($_POST['email']); 
} else {
    $email = $_POST['email'];
}

if (empty($_POST['desserts'])) {
    $desserts_Err = 'Please choose your desserts!';  
} else {
    $desserts = $_POST['desserts'];
}

if ($_POST['drink'] == NULL) {
    $drink_Err = 'Please select your drink!';  
} else {
    $drink = $_POST['drink'];
}

if (empty($_POST['comments'])) {
    $comments_Err = 'Please share your comments with us!';  
} else {
    $comments = $_POST['comments'];
}

if (empty($_POST['privacy'])) {
    $privacy_Err = 'You MUST agree!';  
} else {
    $privacy = $_POST['privacy'];
}

if(empty($_POST['phone'])) { 
    $phone_Err = 'Your phone number please!';
    unset($_POST['phone']);
} elseif(array_key_exists('phone', $_POST)) {
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { 
        $phone_Err = 'Invalid format!';
        unset($_POST['phone']);
} else {
     $phone = $_POST['phone'];
    }
}


function my_desserts() {
    $my_return = '';
    if (!empty($_POST['desserts'])) {
        $my_return = implode(', ', $_POST['desserts'] );
    }
    return $my_return;
} // closes function


if(isset(
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['desserts'],
    $_POST['drink'],
    $_POST['comments'],
    $_POST['privacy'],
    $_POST['phone']
)) {

$to = 'szemeo@mystudentswa.com';
$subject = 'Test Email,' .date('m/d/y') ;
$body = '
First name: '.$first_name.' '.PHP_EOL.'
Last name: '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Phone number: '.$phone.' '.PHP_EOL.'
Drink: '.$drink.' '.PHP_EOL.'
Desserts: '.my_desserts().' '.PHP_EOL.'
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


// random images

$photos = array(
    'pic1',
    'pic2',
    'pic3',
    'pic4',
    'pic5',
);

$photos[0] = 'pic1';
$photos[1] = 'pic2';
$photos[2] = 'pic3';
$photos[3] = 'pic4';
$photos[4] = 'pic5';

function random_pics($photos) {
    $i = rand(0,4);
    $selected_image = ''.$photos[$i].'.jpg';
    echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'" class="random-image">';
}


// project

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

