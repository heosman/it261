<?php 
include('config.php');
include('includes/header.php'); ?>

    <div id="wrapper">
    <main>
    <h1><?php echo $headline; ?></h1><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, turpis et vulputate placerat, augue purus rhoncus elit, ut ultricies nunc arcu in augue. </p><br>
    <h2>Please fill out our form!</h2><br>
    <?php include('includes/form.php'); ?>
    </main>
    <aside>
       <h3>Our aside for our form!</h3><br>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, turpis et vulputate placerat, augue purus rhoncus elit, ut ultricies nunc arcu in augue. </p><br>
       <img src="images/desserts.jpg" alt="Desserts" class="aside-image">
    </aside>

<?php 
include('includes/footer.php'); ?>