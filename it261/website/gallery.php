<?php 
include('config.php');
include('includes/header.php'); 

$dessert['Eclair_Cake'] = 'pic1_No-Bake Eclair Cake is a dessert that has layers of graham crackers, vanilla pudding, whipped topping and topped with chocolate frosting.';
$dessert['Tiramisu'] = 'pic2_Tiramisu is a coffee-flavored Italian dessert. It is made of ladyfingers dipped in coffee, layered with a whipped mixture of eggs, sugar, and mascarpone cheese, flavored with cocoa.';
$dessert['Brownies'] = 'pic3_A chocolate brownie or simply a brownie is a square or rectangular chocolate baked confection.';
$dessert['Chocolate_Chip_Cookies'] = 'pic4_A chocolate chip cookie is a drop cookie that features chocolate chips or chocolate morsels as its distinguishing ingredient.';
$dessert['Cake'] = 'pic5_Cake is a form of sweet food made from flour, sugar, and other ingredients, that is usually baked.';

?>

    <div id="wrapper">
    <div id="hero">
    </div>
    <main id="gallery">
    <h1><?php echo $headline; ?></h1><br>
    <table>
    <?php foreach($dessert as $name => $image) : ?>
    <tr>
    <td><img src="images/<?php echo substr($image, 0, 4); ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>" class="gallery"></td> <!-- image-->
    <td><?php echo str_replace('_', ' ', $name); ?></td>  <!-- name-->
    <td><?php echo substr($image, 5); ?></td>   <!--info-->
    </tr>
    <?php endforeach;  ?>
</table>

<?php 
include('includes/footer.php'); ?>