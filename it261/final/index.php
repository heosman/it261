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
    <div id="hero">
    </div>
    <main>
    <h1><?php echo $headline; ?></h1><hr><br>
    <h2>Welcome to The Spot!</h2>
    <p>Here you will discover nice places for desserts and drinks, such as coffee, 
        tea, and boba, in the Seattle area. Most of the locations are near the UW District 
        (Univeristy of Washington), so they are great for students!</p>
    <div class="card">
    <h3>Seattle Spots</h3>
    <p>Explore the great cafes and dessert shops in Seattle!</p>
    <a href="spots.php"><p class="button">View the Spots!</p></a>
    </div>
    <div class="card">
    <h3>Contact Us</h3>
    <p>Contact us with any questions or concerns!</p>
    <a href="contact.php"><p class="button">Fill out our form!</p></a>
    </div>
    </main>
    <aside>
    <img src="images/seattle2.jpg" alt="Photo of Seattle" class="aside-image">
    </aside>

<?php 
include('includes/footer.php'); ?>