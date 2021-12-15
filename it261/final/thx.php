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
    <main>
    <h2 class="thanks"><?php echo $headline; ?></h2><hr><br>
    <div class="aside-image">
    <img src="images/balloons.png" alt="Balloons" class="aside-image">
    </div>
    </main>
    <aside>
       <img src="images/drinks.jpg" alt="Caffeine drinks" class="aside-image">
    </aside>

<?php 
include('includes/footer.php'); ?>