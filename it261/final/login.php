<?php 

include('server.php'); 
include('includes/header-form.php'); 
?>
</header>
<div id="wrapper">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<h1 class="center">Login</h1>
<label for="username"></label>
<div><input type="text" name="username" placeholder="Username" value="
<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username'])
    ;?>
">
</div>
<label for="password"></label>
<div><input type="password" name="password" placeholder="Password" value="
<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password'])
    ;?>
">
</div>
<div><button type="submit" class="btn" name="login_user" >Login</button></div>
<hr>
<div><button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button></div>

<?php include('errors.php'); ?>

<p class="block">Not a member? <a href="register.php">Register here!</a></p>

</fieldset>
</form>




</div>
</body>
</html>