<?php


/* $variable = 'Life is good!';
if(isset($variable)) {
    echo 'Yippy-skippy!!!';
} else {
    echo 'Not';
}
*/

// global variables

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}


// switch
switch($today) {
    case 'Sunday' : 
        $coffee = '<h2>Sunday is our Green Tea Day!</h2>';
        $pic = 'green-tea.jpg';
        $alt = 'Green Tea';
        $content = 'Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East Asia.';
        $bgcolor = 'background-color:#FFCAC9';
    break;
    
    case 'Monday' : 
        $coffee = '<h2>Monday is our Pumpkin Latte Day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = 'The Pumpkin Spice Latte is a coffee drink made with a mix of traditional autumn spice flavors, steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in 2003, and the season of fall.';
        $bgcolor = 'background-color:#EDCE6D';
    break;
    
    case 'Tuesday' : 
        $coffee = '<h2>Tuesday is our Mocha Day!</h2>';
        $pic = 'mocha.jpg';
        $alt = 'Mocha';
        $content = 'A caffè mocha, also called mocaccino, is a chocolate-flavoured warm beverage that is a variant of a caffè latte, commonly served in a glass rather than a mug. Other commonly used spellings are mochaccino and also mochachino.';
        $bgcolor = 'background-color:#E5E587';
    break;
    
    case 'Wednesday' : 
        $coffee = '<h2>Wednesday is our Latte Day!</h2>';
        $pic = 'latte.jpg';
        $alt = 'Latte';
        $content = 'Caffè latte, often shortened to just latte in English, is a coffee drink of Italian origin made with espresso and steamed milk.';
        $bgcolor = 'background-color:#A5ED8B';
    break;
    
    case 'Thursday' : 
        $coffee = '<h2>Thursday is our Cappuccino Day</h2>';
        $pic = 'cap.jpg';
        $alt = 'Cappuccino';
        $content = 'A cappuccino is an espresso-based coffee drink that originated in Italy, and is prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.';
        $bgcolor = 'background-color:#85F2E9';
    break;
    
    case 'Friday' : 
        $coffee = '<h2>Friday is our Americano Day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = 'Caffè Americano is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. The strength of an Americano varies with the number of shots of espresso and the amount of water added.';
        $bgcolor = 'background-color:#83ABEF';
    break;
    
    case 'Saturday' : 
        $coffee = '<h2>Saturday is Regular Coffee Day!</h2>';
        $pic = 'coffee.png';
        $alt = 'Coffee';
        $content = 'Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species. From the coffee fruit, the seeds are separated to produce a stable, raw product: Unroasted green coffee.';
        $bgcolor = 'background-color:#D7C9FF';
    break;
    }


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch Classwork Exercise</title>
    <style>
        #wrapper {
            width: 940px;
            margin: 20px auto;
        }

        .aside {
            padding: 10px;
            border-radius: 14px;
            border: 1px solid black;
            width: 40%;
        }

        a {
            text-decoration: none;
        }

        img {
            height: 400px;
        }
    </style>
</head>
<body style="<?php echo $bgcolor;?>">
<div id="wrapper">
    <h1>My Switch Classwork Exercise</h1>
    <?php
        echo $coffee;
    ?>
    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    <br>
    <p><?php echo $content; ?></p>
    <br>
    <div class="aside">
    <h2>Check out our daily specials!</h2>
    <ul>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
    </ul>
    </div>
</div>
</body>
</html>