<div class="userform userformdiv">
<?php

  if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyfields") {
      ?><div class="alert alert-danger" role="alert">You have to fill in all fields.</div><?php
    } else if ($_GET['error'] == "invalidusername") {
      ?><div class="alert alert-danger" role="alert">Username is invalid. Characters allowed - [a-z, A-Z, 0-9].</div><?php
    } else if ($_GET['error'] == "passwordcheck") {
      ?><div class="alert alert-danger" role="alert">Passwords are not equal.</div><?php
    } else if ($_GET['error'] == "sqlerror_prepare") {
      ?><div class="alert alert-danger" role="alert">Server error, try again later.</div><?php
    } else if ($_GET['error'] == "usernametaken") {
      ?><div class="alert alert-danger" role="alert">This username is already taken.</div><?php
    } else if ($_GET['error'] == "sqlerror_insert") {
      ?><div class="alert alert-danger" role="alert">Server error, try again later.</div><?php
    }
  }
?>

  <h1>Register</h1>
  <form action="userconfig/register.inc.php" method="post">
    <input type="text" name="register-username" value="<?php if (isset($_GET['username'])) { echo $_GET['username']; } ?>" placeholder="Username"><br>
    <input type="password" name="register-password" placeholder="Password"><br>
    <input type="password" name="register-repeat" placeholder="Repeat password"><br>
    <button type="submit" name="register-submit">Register</button>
  </form>
  <a href="index.php?p=login">LOGIN</a>
</div>
