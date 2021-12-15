<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label for="name">Name </label>
<input type="text" name="name" value="
<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])
    ;?>
">
<span class="error"><?php echo $name_Err; ?></span>

<label for="email">Email </label>
<input type="text" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])
    ;?>
">
<span class="error"><?php echo $email_Err; ?></span>

<label for="addiction">Are you a caffeine addict?</label>
<ul>
    <li>
    <input type="radio" name="addiction" value="Yes"
    <?php if(isset($_POST['addiction']) && $_POST['addiction'] == 'Yes') echo 'checked="checked" ' ;?>
    >Yes!
    </li>    
    <li>
    <input type="radio" name="addiction" value="No"
    <?php if(isset($_POST['addiction']) && $_POST['addiction'] == 'No') echo 'checked="checked" ' ;?>
    >No
    </li>
</ul>
<span class="error"><?php echo $addiction_Err; ?></span>

<label for="drink">Favorite Type of Drink </label>
<select name="drink">
<option value="" NULL
<?php if(isset($_POST['drink']) && $_POST['drink'] == NULL) echo 'selected="unselected" ' ;?>
>Select one </option>
<option value="Boba"
<?php if(isset($_POST['drink']) && $_POST['drink'] == 'Boba') echo 'selected="selected" ' ;?>
>Boba </option>
<option value="Fresh Tea"
<?php if(isset($_POST['drink']) && $_POST['drink'] == 'Fresh Tea') echo 'selected="selected" ' ;?>
>Fresh Tea </option>
<option value="Fruit Tea"
<?php if(isset($_POST['drink']) && $_POST['drink'] == 'Fruit Tea') echo 'selected="selected" ' ;?>
>Fruit Tea </option>
<option value="Milk Tea"
<?php if(isset($_POST['drink']) && $_POST['drink'] == 'Milk Tea') echo 'selected="selected" ' ;?>
>Milk Tea </option>
<option value="Coffee"
<?php if(isset($_POST['drink']) && $_POST['drink'] == 'Coffee') echo 'selected="selected" ' ;?>
>Coffee </option>
<option value="Other"
<?php if(isset($_POST['drink']) && $_POST['drink'] == 'Other') echo 'selected="selected" ' ;?>
>Other </option>
</select>
<span class="error"><?php echo $drink_Err; ?></span>

<label for="spots">What spots have you been to? </label>
<ul>
    <li>
    <input type="checkbox" name="spots[]" value="Starbucks"
    <?php if(isset($_POST['spots']) && in_array('Starbucks', $spots)) echo 'checked="checked" ' ;?>
    > Starbucks
    </li>
    <li>
    <input type="checkbox" name="spots[]" value="Ding Tea"
    <?php if(isset($_POST['spots']) && in_array('Ding Tea', $spots)) echo 'checked="checked" ' ;?>
    > Ding Tea
    </li>
    <li>
    <input type="checkbox" name="spots[]" value="Boba Up"
    <?php if(isset($_POST['spots']) && in_array('Boba Up', $spots)) echo 'checked="checked" ' ;?>
    > Boba Up
    </li>
    <li>
    <input type="checkbox" name="spots[]" value="Nana's Green Tea"
    <?php if(isset($_POST['spots']) && in_array('Nana\'s Green Tea', $spots)) echo 'checked="checked" ' ;?>
    > Nana's Green Tea
    </li>
    <li>
    <input type="checkbox" name="spots[]" value="Matcha Cafe Maiko"
    <?php if(isset($_POST['spots']) && in_array('Matcha Cafe Maiko', $spots)) echo 'checked="checked" ' ;?>
    > Matcha Cafe Maiko
    </li>
</ul>
<span class="error"><?php echo $spots_Err; ?></span>


<label for="comments">Comments </label>
<textarea name="comments">
<?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?>
</textarea>
<span class="error"><?php echo $comments_Err; ?></span>


<input type="submit" value="Submit">
<div><button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button></div>
</fieldset>

</form>