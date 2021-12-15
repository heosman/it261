<?php 

session_start();

include('config.php');

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');

if(isset($_SESSION['success'])) :?>
<div class="success">
<h3>
<?php echo $_SESSION['success']; 
unset($_SESSION['success']);
?>
</h3>
</div>
<?php endif; 

if(isset($_SESSION['username'])) :?>
    <div class="welcome-logout">
    <p>Signed in as <br><strong><?php echo $_SESSION['username']; ?></strong></p>
    <div>
    <p><a href="index.php?logout='1' " class="logout-button"> Log out &#8594; </a></p>
    </div>
    </div>
    <?php endif; ?>

</header>

    <div id="wrapper">
    <div id=hero>
    </div>
    <main>
    <h1><?php echo $headline; ?></h1><hr><br>
    <?php echo $anime; ?><br>
    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>" class="image"><br><br>
    <p><?php echo $content; ?></p><br>
    </main>
    <aside class="daily-aside">
        <div>
        <h2>Check out my daily drink list!</h2>
        <ul>
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
        </ul>
        </div>
    </aside>

<?php 
include('includes/footer.php'); ?>