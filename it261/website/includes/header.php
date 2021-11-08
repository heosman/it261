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
                echo my_nav($nav);
            ?>
            </ul>
        </nav>
    </div>
    </header>