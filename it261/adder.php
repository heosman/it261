<!DOCTYPE HTML>
<html>
<head>
<title>My Adder Assignment</title>
<style>
    html {
        color: #414C4C;
    }

    p {
        color: red;
        text-align: center;
    }
    
    h1 {
        text-align: center;
    }
    
    h2 {
        font-size: 1.5em;
        text-align: center;
    }
    
    form {
        width: 350px;
        margin: 0 auto;
        border: 1px solid #707C7C;
        border-radius: 8px;
        padding: 10px;
    }

    label {
        margin-bottom: 10px;
        display: block;
    }

    input {
        display: block;
        margin-bottom: 10px;
    }
    
    p a {
        text-decoration: none;
        border: 2px outset #707C7C;
        padding: 5px;
        color: #414C4C;
    }
</style>
</head>
<body>
<h1>Adder.php</h1> <form action="" method="post">
<label>Enter the first number: </label>
<input type="text" name="num1"><br>
<label>Enter the second number: </label>
<input type="text" name="num2"><br>
<input type="submit" value="Add Em!!"> </form>

<?php //adder-wrong.php
if(isset($_POST['num1'],
        $_POST['num2'])){

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$int_num1 = intval($num1);
$int_num2 = intval($num2);

$myTotal = $int_num1 + $int_num2;

echo '<h2>You added '.$int_num1.' and '.$int_num2.'</h2>';
echo ' <p style="color:red;"> and the answer is <br>
'.$myTotal.'!</p>';
echo '<p><a href="">Reset</a></p>';
}
?>

<!--No space space between opening PHP tag and the comment --> 
<!--PHP closing tag in wrong location (was at the bottom of the file but should be before the HTML --> 
<!--Missing $_POST for num2 --> 
<!--Missing DOCTYPE HTML tag --> 
<!--Unnessessary syntax after the closing HTML tag on line 29--> 
<!--Unnessessary minus sign in front of equal sign on line 6-->
<!--Missing closing h2 tag on line 7-->
<!--Incorrect use of single-quote vs double-quotes (double-quotes for concatenation) and missing single-quotes on line 7-->
<!--Moved style attribute to the opening tag -->
<!--Double-quotes were used instead of single quotes and missing period before $myTotal variable and missing single quote after closing p tag on line 9-->
<!--Missing closing p tag & semi-colon on line 10-->
<!--Unnessessary slash (in the opening form tag) and missing method (post) in form tag on line 20-->
<!--Missing opening label tag on line 21 -->
<!--There is no opening label tag and a closing label tag in the wrong place on line 22-->
<!--The "n" in $num2 was capitalized on line 6 and line 21-->
<!--Missing double-quote after Add Em!! on line 23-->
<!--Moved PHP to after the form tag so echos would display after the HTML-->
<!--Added styles and organized code a little bit (didn't effect the results) -->
<!--Corrected non-numeric error when no values are entered-->

</body>
</html>