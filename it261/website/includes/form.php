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

<label for="desserts">Favorite Desserts </label>
<ul>
    <li>
    <input type="checkbox" name="desserts[]" value="Eclair Cake"
    <?php if(isset($_POST['desserts']) && in_array('Eclair Cake', $desserts)) echo 'checked="checked" ' ;?>
    > Eclair Cake
    </li>
    <li>
    <input type="checkbox" name="desserts[]" value="Tiramisu"
    <?php if(isset($_POST['desserts']) && in_array('Tiramisu', $desserts)) echo 'checked="checked" ' ;?>
    > Tiramisu
    </li>
    <li>
    <input type="checkbox" name="desserts[]" value="Fudge Brownies"
    <?php if(isset($_POST['desserts']) && in_array('Fudge Brownies', $desserts)) echo 'checked="checked" ' ;?>
    > Fudge Brownies
    </li>
    <li>
    <input type="checkbox" name="desserts[]" value="Chocolate Chip Cookies"
    <?php if(isset($_POST['desserts']) && in_array('Chocolate Chip Cookies', $desserts)) echo 'checked="checked" ' ;?>
    > Chocolate Chip Cookies
    </li>
    <li>
    <input type="checkbox" name="desserts[]" value="Vanilla Cake"
    <?php if(isset($_POST['desserts']) && in_array('Vanilla Cake', $desserts)) echo 'checked="checked" ' ;?>
    > Vanilla Cake
    </li>
    <li>
    <input type="checkbox" name="desserts[]" value="Other"
    <?php if(isset($_POST['desserts']) && in_array('Other', $desserts)) echo 'checked="checked" ' ;?>
    > Other
    </li>
</ul>
<span class="error"><?php echo $desserts_Err; ?></span>

<label for="drink">Drinks </label>
<select name="drink">
<option value="" NULL
<?php if(isset($_POST['drink']) && $_POST['drink'] == NULL) echo 'selected="unselected" ' ;?>
>Select one </option>
<option value="Milk"
<?php if(isset($_POST['drink']) && $_POST['drink'] == 'Milk') echo 'selected="selected" ' ;?>
>Milk </option>
<option value="Tea"
<?php if(isset($_POST['drink']) && $_POST['drink'] == 'Tea') echo 'selected="selected" ' ;?>
>Tea </option>
<option value="Coffee"
<?php if(isset($_POST['drink']) && $_POST['drink'] == 'Coffee') echo 'selected="selected" ' ;?>
>Coffee </option>
<option value="Other"
<?php if(isset($_POST['drink']) && $_POST['drink'] == 'Other') echo 'selected="selected" ' ;?>
>Other </option>
</select>
<span class="error"><?php echo $drink_Err; ?></span>

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