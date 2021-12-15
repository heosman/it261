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


<?php

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location: spots.php');
}

$sql = 'SELECT * FROM spots WHERE spot_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
$name = stripslashes($row['name']);
$location = stripslashes($row['location']);
$price = stripslashes($row['price']);
$description = stripslashes($row['description']);
$blurb = stripslashes($row['blurb']);
$feedback = '';
}

} else {
    $feedback == 'Something is not working!';
}

?>

<div id="wrapper">
<main>
<h1><?php echo $name ;?></h1><br>

<?php
if($feedback == '') {
    echo '<ul>';
    echo '<li><b>Name: </b> '.$name.'</li>';
    echo '<li><b>Location: </b> '.$location.'</li>';
    echo '<li><b>Price: </b> '.$price.'</li><br>';
    echo '<p>'.$description.'</p>';
    echo '</ul>';
    echo '<br><br><a href="spots.php" class="button" class="top">&#8592; Return back to The Spots page!</a><br>';
}

?>

</main>

<aside class="bottom"> 
<?php
if($feedback == '') {
    echo '<img class="center" src="images/pic'.$id.'.jpg" alt="'.$name.'" id="drinkpic">';
    echo '<p class="blurb">'.$blurb.'</p>';
}
?>

</aside>
</div>

<?php 

mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');
