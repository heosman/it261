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
    <h1><?php echo $headline; ?></h1><hr><br>
    <h2>Great Spots in Seattle!</h2><br>
    <p>Below are a few of the places you can go to for desserts, coffee, tea, boba and etc. in the Seattle Area.</p>
<?php

$sql = 'SELECT * FROM spots';

// we need to connect to the database using mySQLi_connect

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// if statement (if we have more than 0 rows)

if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
    echo '<br><h3>'.$row['name'].'</h3>';
    echo '<img src="images/photo'.$row['spot_id'].'.jpg" alt="'.$name.'" id="drinkpic">';
    echo '<br><br><a href="spot-view.php?id='.$row['spot_id'].'" class="button">More info!</a><br><br>';
} // closing while

} else {
    echo 'We have a problem!';
}


mysqli_free_result($result);
mysqli_close($iConn);

?>
    </main>
    <aside>
       <img src="images/coffee-book.jpg" alt="Photo of coffee with book" class="aside-image">
    </aside>
</div>
<?php 
include('includes/footer.php'); ?>