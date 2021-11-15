<?php

$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$wines = '';
$regions = '';
$comments = '';
$privacy = '';
$phone = '';

$first_name_Err = '';
$last_name_Err = '';
$email_Err = '';
$gender_Err = '';
$wines_Err = '';
$regions_Err = '';
$comments_Err = '';
$privacy_Err = '';
$phone_Err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if (empty($_POST['first_name'])) {
    $first_name_Err = 'Please fill out your first name!';  
} else {
    $first_name = $_POST['first_name'];
}

if (empty($_POST['last_name'])) {
    $last_name_Err = 'Please fill out your last name!';  
} else {
    $last_name = $_POST['last_name'];
}

if (empty($_POST['gender'])) {
    $gender_Err = 'Please choose your gender!';  
} else {
    $gender = $_POST['gender'];
}

if (empty($_POST['email'])) {
    $email_Err = 'Please fill out your email!';  
} else {
    $email = $_POST['email'];
}

if (empty($_POST['wines'])) {
    $wines_Err = 'Please choose your wines!';  
} else {
    $wines = $_POST['wines'];
}

if ($_POST['regions'] == NULL) {
    $regions_Err = 'Please select your region!';  
} else {
    $regions = $_POST['regions'];
}

if (empty($_POST['comments'])) {
    $comments_Err = 'Please share your comments with us!';  
} else {
    $comments = $_POST['comments'];
}

if (empty($_POST['privacy'])) {
    $privacy_Err = 'You MUST agree!';  
} else {
    $privacy = $_POST['privacy'];
}

if(empty($_POST['phone'])) { 
    $phone_Err = 'Your phone number please!';
} elseif(array_key_exists('phone', $_POST)) {
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { 
        $phone_Err = 'Invalid format!';
} else {
     $phone = $_POST['phone'];
    }
}


function my_wines() {
    $my_return = '';
    if (!empty($_POST['wines'])) {
        $my_return = implode(', ', $_POST['wines'] );
    }
    return $my_return;
} // closes function


if(isset(
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['wines'],
    $_POST['regions'],
    $_POST['comments'],
    $_POST['privacy'],
    $_POST['phone']
)) {

$to = 'hanaaneooo@gmail.com';
$subject = 'Test Email,' .date('m/d/y') ;
$body = '
First name: '.$first_name.' '.PHP_EOL.'
Last name: '.$last_name.' '.PHP_EOL.'
Gender: '.$gender.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Phone number: '.$phone.' '.PHP_EOL.'
Region: '.$regions.' '.PHP_EOL.'
Wines: '.my_wines().' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
';

$headers = array(
'from' => 'noreply@hananeo.com',
'Reply-to' => ''.$email.'',
);

mail($to, $subject, $body, $headers);
header('Location: thx.php');

}

}

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Emailable Form #1</title>
<link a href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label for="first_name">First Name </label>
<input type="text" name="first_name" value="
<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])
    ;?>
">
<span class="error"><?php echo $first_name_Err; ?></span>

<label for="last_name">Last Name </label>
<input type="text" name="last_name" value="
<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])
    ;?>
">
<span class="error"><?php echo $last_name_Err; ?></span>

<label for="email">Email </label>
<input type="text" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])
    ;?>
">
<span class="error"><?php echo $email_Err; ?></span>

<label for="phone">Phone Number </label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="
<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone'])
    ;?>
">
<span class="error"><?php echo $phone_Err; ?></span>

<label for="gender">Gender </label>
<ul>
    <li>
    <input type="radio" name="gender" value="Female"
    <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked="checked" ' ;?>
    > Female
    </li>
    <li>
    <input type="radio" name="gender" value="Male"
    <?php if(isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'checked="checked" ' ;?>
    > Male
    </li>
    <li>
    <input type="radio" name="gender" value="Other"
    <?php if(isset($_POST['gender']) && $_POST['Gender'] == 'Other') echo 'checked="checked" ' ;?>
    > Other
    </li>
</ul>
<span class="error"><?php echo $gender_Err; ?></span>

<label for="wines">Favorite Wines </label>
<ul>
    <li>
    <input type="checkbox" name="wines[]" value="Cabernet"
    <?php if(isset($_POST['wines']) && in_array('Cabernet', $wines)) echo 'checked="checked" ' ;?>
    > Cabernet
    </li>
    <li>
    <input type="checkbox" name="wines[]" value="Merlot"
    <?php if(isset($_POST['wines']) && in_array('Merlot', $wines)) echo 'checked="checked" ' ;?>
    > Merlot
    </li>
    <li>
    <input type="checkbox" name="wines[]" value="Syrah"
    <?php if(isset($_POST['wines']) && in_array('Syrah', $wines)) echo 'checked="checked" ' ;?>
    > Syrah
    </li>
    <li>
    <input type="checkbox" name="wines[]" value="Malbec"
    <?php if(isset($_POST['wines']) && in_array('Malbec', $wines)) echo 'checked="checked" ' ;?>
    > Malbec
    </li>
    <li>
    <input type="checkbox" name="wines[]" value="Blend"
    <?php if(isset($_POST['wines']) && in_array('Blend', $wines)) echo 'checked="checked" ' ;?>
    > Red Blend
    </li>
    <li>
    <input type="checkbox" name="wines[]" value="None"
    <?php if(isset($_POST['wines']) && in_array('None', $wines)) echo 'checked="checked" ' ;?>
    > None
    </li>
</ul>
<span class="error"><?php echo $wines_Err; ?></span>

<label for="regions">Regions </label>
<select name="regions">
<option value="" NULL
<?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected="unselected" ' ;?>
>Select one </option>
<option value="NW"
<?php if(isset($_POST['regions']) && $_POST['regions'] == 'NW') echo 'selected="selected" ' ;?>
>Northwest </option>
<option value="SW"
<?php if(isset($_POST['regions']) && $_POST['regions'] == 'SW') echo 'selected="selected" ' ;?>
>Southwest </option>
<option value="MW"
<?php if(isset($_POST['regions']) && $_POST['regions'] == 'MW') echo 'selected="selected" ' ;?>
>Midwest </option>
<option value="NE"
<?php if(isset($_POST['regions']) && $_POST['regions'] == 'NE') echo 'selected="selected" ' ;?>
>Northeast </option>
<option value="SE"
<?php if(isset($_POST['regions']) && $_POST['regions'] == 'SE') echo 'selected="selected" ' ;?>
>Southeast </option>
<option value="S"
<?php if(isset($_POST['regions']) && $_POST['regions'] == 'S') echo 'selected="selected" ' ;?>
>South </option>
</select>
<span class="error"><?php echo $regions_Err; ?></span>

<label for="comments">Comments </label>
<textarea name="comments">
<?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?>
</textarea>
<span class="error"><?php echo $comments_Err; ?></span>

<label for="privacy">Privacy</label>
<ul>
    <li>
    <input type="radio" name="privacy" value="agree"
    <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked" ' ;?>
    >I agree!
    </li>
</ul>
<span class="error"><?php echo $privacy_Err; ?></span>

<input type="submit" value="Submit">
<p><a href="">Reset</a></p>
</fieldset>

</form>

</body>
</html>