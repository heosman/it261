<?php

if(isset($_POST['fname'],
         $_POST['lname'],
         $_POST['email'],
         $_POST['comments'])) {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$comments = $_POST['comments'];

if(empty($_POST['fname'] &&
         $_POST['lname'] &&
         $_POST['email'] &&
         $_POST['comments'])) {
             echo 'Please fill out the fields!';
         } else {
             echo $fname;
             echo '<br>';
             echo $lname;
             echo '<br>';
             echo $email;
             echo '<br>';
             echo $comments;
         }
} else {
    echo '<form action="" method="post">
    <label>First name: </label>
    <input type="text" name="fname">
    <label>Last name: </label>
    <input type="text" name="lname">
    <label>Email: </label>
    <input type="text" name="email">
    <label>Comments: </label>
    <textarea name="comments"></textarea>

    <input type="submit" value="Submit">
    </form>';
}