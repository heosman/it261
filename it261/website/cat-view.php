<?php

include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('Location: cats.php');
}

$sql = 'SELECT * FROM cats WHERE cat_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
$breed = stripslashes($row['breed']);
$origin = stripslashes($row['origin']);
$lifespan = stripslashes($row['lifespan']);
$description = stripslashes($row['description']);
$feedback = '';
}

} else {
    $feedback == 'Something is not working!';
}

include('includes/header.php');

?>
<div id="wrapper">
<main>
<h1>The <?php echo $breed ;?> Cat</h1><br>

<?php
if($feedback == '') {
    echo '<ul>';
    echo '<li><b>Breed: </b> '.$breed.'</li>';
    echo '<li><b>Origin: </b> '.$origin.'</li>';
    echo '<li><b>Lifespan: </b> '.$lifespan.'</li><br>';
    echo '<p>'.$description.'</p>';
    echo '</ul>';
    echo '<br><br><p>&#8592; Return back to the <a href="cats.php">cats page!</a></p><br>';
}

?>

</main>

<aside class="bottom"> 
<?php
if($feedback == '') {
    echo '<img class="center" src="images/cat'.$id.'.jpg" alt="The '.$breed.' cat" id="catpic">';
    echo '<p class="blurb">The '.$breed.' cat</p>';
}
?>

</aside>
</div>

<?php 

mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');
