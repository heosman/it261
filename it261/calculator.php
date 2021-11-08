<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator Form</title>
    <link href="css/calc.css" type="text/css" rel="stylesheet">
</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" 
    method="post">
    <h1>Our Trip Calculator</h1>
    <fieldset>
    <label for="name">Name: </label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ;?>">
    <label for="miles">How many miles will you be driving? </label>
    <input type="text" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']); ;?>">
    <label for="hours">How many hours per day would you like to drive? </label>
    <input type="text" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ;?>">
    <label for="price">Price per gallon: </label>
    <ul>
        <li><input type="radio" name="price" value="3.00"
        <?php if(isset($_POST['price']) && $_POST['price'] == '3.00')
            echo 'checked="checked" ';?>>$3.00</li>
        <li><input type="radio" name="price" value="3.50"
        <?php if(isset($_POST['price']) && $_POST['price'] == '3.50')
            echo 'checked="checked" ';?>>$3.50</li>
        <li><input type="radio" name="price" value="4.00"
        <?php if(isset($_POST['price']) && $_POST['price'] == '4.00')
            echo 'checked="checked" ';?>>$4.00</li>
    </ul>
    <label for="fuel">Fuel Efficiency: </label>
    <select name="fuel">
        <option value="" NULL
        <?php if(isset($_POST['fuel']) && $_POST['fuel'] == NULL) echo 'selected="unselected" ' ;?>
        >Select efficiency</option>
        <option value="10"
        <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '10') echo 'selected="selected" ' ;?>
        >Terrible (10 mpg)</option>
        <option value="20"
        <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '20') echo 'selected="selected" ' ;?>
        >Getting better (20 mpg)</option>
        <option value="30"
        <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '30') echo 'selected="selected" ' ;?>
        >Good (30 mpg)</option>
        <option value="40"
        <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '40') echo 'selected="selected" ' ;?>
        >Great (40 mpg)</option>
    </select>

    <label for="speed">How many miles will you drive per hour? </label>
    <select name="speed">
        <option value="" NULL
        <?php if(isset($_POST['speed']) && $_POST['speed'] == NULL) echo 'selected="unselected" ' ;?>
        >Select speed</option>
        <option value="50"
        <?php if(isset($_POST['speed']) && $_POST['speed'] == '50') echo 'selected="selected" ' ;?>
        >50 mph</option>
        <option value="60"
        <?php if(isset($_POST['speed']) && $_POST['speed'] == '60') echo 'selected="selected" ' ;?>
        >60 mph</option>
        <option value="70"
        <?php if(isset($_POST['speed']) && $_POST['speed'] == '70') echo 'selected="selected" ' ;?>
        >70 mph</option>
    </select>

    <input type="submit" value="Convert"><br>
    <p><a href="">Reset</a></p>
    </fieldset>
</form>
<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])) {
    echo '<span class="error">Please fill out your name!</span><br>';
}

if(empty($_POST['miles'])) {
    echo '<span class="error">Please fill out how many miles you will drive!</span><br>';
}

if(empty($_POST['price'])) {
    echo '<span class="error">Please choose a price per gallon!</span><br>';
}

if(empty($_POST['hours'])) {
    echo '<span class="error">Please fill out how many hours per day you will drive!</span><br>';
}

if($_POST['fuel'] == NULL) {
    echo '<span class="error">Please choose your fuel efficiency!</span><br>';
}

if($_POST['speed'] == NULL) {
    echo '<span class="error">Please choose your speed!</span><br>';
}


if(isset(
    $_POST['name'],
    $_POST['miles'],
    $_POST['price'],
    $_POST['hours'],
    $_POST['fuel'],
    $_POST['speed'])) {
$name = $_POST['name'];
$miles = (int)$_POST['miles'];
$price = (float)$_POST['price'];
$hours = (int)$_POST['hours'];
$fuel = (int)$_POST['fuel'];
$speed = (int)$_POST['speed'];

if($fuel == 0) {
    $fuel = 1;
}

if($speed == 0) {
    $speed = 1;
}


if($hours == 0) {
    $hours = 1;
}

// Gallons
$gallons = $miles / $fuel;
$friendly_gallons = floor($gallons);

// Total cost
$total = $gallons * $price;
$friendly_total = number_format($total, 2);

// Days 
$days = ($miles / $speed) / $hours;
$friendly_days = number_format($days, 1);

// Hours in all
$total_hours = $hours * $days;
$friendly_totalHours = floor($total_hours);

if(!empty($name && $miles && $price && $hours) && $fuel && $speed ==!NULL) {
    echo '
    <div class="box">
    <p><b>'.$name.', here are your stats:</b></p><br>
    <p><b>Miles:</b> '.$miles.' miles</p>
    <p><b>Fuel efficiency:</b> '.$fuel.' miles per gallon</p>
    <p><b>Speed:</b> '.$speed.' miles per hour</p><br>
    <p><b>Gallons:</b> '.$friendly_gallons.' gallons</p>
    <p><b>Days:</b> '.$friendly_days.' days (= '.$friendly_totalHours.' hours of driving)</p>
    <p><b>Total cost:</b> $'.$friendly_total.'</p>
    </div>
    ';
} 

} // close isset






} // server request

?>
</body>
</html>