<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['projects.php'] = 'Projects';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of my IT 261 website';
        $body = 'home';
        $headline = "Welcome to my IT 261 website!";
    break;

    case 'about.php':
        $title = 'About page of my IT 261 website';
        $body = 'about inner';
        $headline = "Welcome to my About page!";
    break;

    case 'daily.php':
        $title = 'Daily page of my IT 261 website';
        $body = 'daily inner';
        $headline = "Welcome to my Daily page!";
    break;

    case 'projects.php':
        $title = 'Projects page of my IT 261 website';
        $body = 'projects inner';
        $headline = "Welcome to my Projects page!";
    break;

    case 'contact.php':
        $title = 'Contact page of my IT 261 website';
        $body = 'contact inner';
        $headline = "Welcome to my Contact page!";
    break;

    case 'gallery.php':
        $title = 'Gallery page of my IT 261 website';
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
        suddenly thrust into the world of Curses—dreadful beings formed from human malice and negativity—after 
        swallowing the said item, revealed to be a finger belonging to the demon Sukuna Ryoumen, the "King 
        of Curses."
        <br><br>Yuuji experiences first-hand the threat these Curses pose to society as he discovers his own 
        newfound powers. Introduced to the Tokyo Metropolitan Jujutsu Technical High School, he begins to 
        walk down a path from which he cannot return—the path of a Jujutsu sorcerer.';
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
        with Yuuki Anzai—a human and vampire hybrid.
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
        there would be no need for fighting—not at all like the frozen village in Iceland where he was 
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

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="css/styles.css" type=text/css rel="stylesheet">
<title><?php echo $title; ?></title>

</head>

<body class="<?php echo $body;?>">
    <header>
        <div class="header-inner">
        <a href="../index.php"></a>
        <img id="logo" src="../images/logo.png" alt="logo">
        <nav>
            <!-- <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Daily</a></li>
                <li><a href="">People</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Gallery</a></li>
                </ul>
            -->
            <ul>
            <?php
                foreach($nav as $key => $value) {
                    if(THIS_PAGE == $key) {
                        echo '<li><a class="current" href="'.$key.'"> '.$value.' </a></li>';
                    } else {
                        echo '<li><a href="'.$key.'"> '.$value.' </a></li>';
                    }
                }
                ?>
            </ul>
        </nav>
        </div>
    </header>