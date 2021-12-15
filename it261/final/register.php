<?php 

include('server.php');
include('includes/header-form.php');

?>
</header>
<div id="wrapper">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<h1>Register Today!</h1>
<label for="name"></label>
<div>
<input type="text" name="name" placeholder="Name" value="
<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])
    ;?>
">
</div>
<label for="email"></label>
<div><input type="email" name="email" placeholder="Email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])
    ;?>
">
</div>
<label for="username"></label>
<div><input type="text" name="username" placeholder="Username" value="
<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username'])
    ;?>
">
</div>
<label for="password_1"></label>
<div><input type="password" name="password_1" placeholder="Password" value="
<?php if(isset($_POST['password_1'])) echo htmlspecialchars($_POST['password_1'])
    ;?>
">
</div>
<label for="password_2"></label>
<div><input type="password" name="password_2" placeholder="Confirm Password" value="
<?php if(isset($_POST['password_2'])) echo htmlspecialchars($_POST['password_2'])
    ;?>
">
</div>
<div><button type="submit" name="reg_user" class="btn">Register</button>
</div>
<hr>
<div><button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
</div>
<?php include('errors.php'); ?>

<p class="block">Already a user? <a href="login.php">Log in here!</a></p>

</fieldset>

</form>



</div>
</body>
</html>