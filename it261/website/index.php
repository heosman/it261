<?php 
include('config.php');
include('includes/header.php'); ?>

    <div id="wrapper">
    <div id="hero">
        <?php echo  random_pics($photos); ?>
        <h2>
        <pre>
        <br>
        function random_pics($photos) {
            $i = rand(0,4);
            $selected_image = ''.$photos[$i].'.jpg';
            echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'" class="random-image">';
        }

        </pre>
        </h2>
    </div>
    <main>
    <h1><?php echo $headline; ?></h1><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, turpis et vulputate placerat, augue purus rhoncus elit, ut ultricies nunc arcu in augue. Integer condimentum velit et blandit ultrices. Praesent venenatis nec tellus eget finibus. Ut convallis dolor nec massa porttitor facilisis. Phasellus auctor est elit, eget auctor nunc faucibus ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer consectetur magna ut erat lacinia consequat. Etiam ut ante ac metus aliquet condimentum condimentum sed ex. Sed vitae sagittis sem, et euismod erat. Fusce ultrices vitae ipsum in viverra. Duis quis neque pretium, viverra lacus sed, pulvinar nibh. Morbi nibh lectus, ornare eget arcu quis, volutpat placerat purus. Nullam ultricies justo ipsum, in accumsan metus sollicitudin nec. Nunc posuere sapien ac leo aliquet maximus. Maecenas eleifend finibus leo ut sollicitudin. Cras ac sollicitudin ligula.</p>
    </main>
    <aside>
       <h3>Our aside for our Home page!</h3><br>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, turpis et vulputate placerat, augue purus rhoncus elit, ut ultricies nunc arcu in augue. </p><br>
    </aside>

<?php 
include('includes/footer.php'); ?>