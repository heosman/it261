<?php 
include('config.php');
include('includes/header.php'); ?>

    <div id="wrapper">
    <main>
    <h1><?php echo $headline; ?></h1><br><br>
    <h2>The Many Different Types of Cats!</h2><br>

<?php

$sql = 'SELECT * FROM cats';

// we need to connect to the database using mySQLi_connect

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// if statement (if we have mor ethan 0 rows)

if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
    echo '<h3>The '.$row['breed'].' cat</h3>';
    echo '<a href="cat-view.php?id='.$row['cat_id'].'">(More info!)</a><br><br>';
} // closing while

} else {
    echo 'We have a problem!';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>
    </main>
    <aside>
       <h3>Our aside for our project!</h3><br>
       <img src="images/cutekittens.jpg" alt="Kittens together" class="aside-image">
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, turpis et vulputate placerat, augue purus rhoncus elit, ut ultricies nunc arcu in augue. </p><br>
    </aside>

<?php 
include('includes/footer.php'); ?>