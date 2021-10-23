<?php 
include('includes/header.php'); ?>

    <div id="wrapper">
    <div id=hero>
    </div>
    <main>
    <h1><?php echo $headline; ?></h1><br>
    <h2><?php echo $anime; ?></h2><br>
    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>" class="image"><br><br>
    <p><?php echo $content; ?></p><br>
    </main>
    <aside style="<?php echo $bgcolor;?>" class="daily-aside">
        <div>
        <h2>Check out my daily anime list!</h2>
        <ul>
            <li><a href="daily.php?today=Sunday">Sunday</a></li><hr>
            <li><a href="daily.php?today=Monday">Monday</a></li><hr>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li><hr>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li><hr>
            <li><a href="daily.php?today=Thursday">Thursday</a></li><hr>
            <li><a href="daily.php?today=Friday">Friday</a></li><hr>
            <li><a href="daily.php?today=Saturday">Saturday</a></li><hr>
        </ul>
        </div>
    </aside>

<?php 
include('includes/footer.php'); ?>