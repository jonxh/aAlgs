<div class="userform userformdiv">

<?php

  if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyfields") {
      ?><div class="alert alert-danger" role="alert">You have to fill in all fields.</div><?php
    } else if ($_GET['error'] == "sqlerror_prepare") {
      ?><div class="alert alert-danger" role="alert">Server error, try again later.</div><?php
    } else if ($_GET['error'] == "wrongpassword") {
      ?><div class="alert alert-danger" role="alert">Wrong password.</div><?php
    } else if ($_GET['error'] == "nouser") {
      ?><div class="alert alert-danger" role="alert">There is no user by that name.</div><?php
    }
  } else if (isset($_GET['success'])) {
    if ($_GET['success'] == "register") {
?>
      <div class="alert alert-success" role="alert">
        You have registered! You can now sign in.
      </div>
<?php
    }
  }

?>
  <h1>Login</h1>
  <form action="userconfig/login.inc.php" method="post">
    <input type="text" name="login-username" value="<?php if (isset($_GET['username'])) { echo $_GET['username']; } ?>" placeholder="Username"><br>
    <input type="password" name="login-password" placeholder="Password"><br>
    <button type="submit" name="login-submit">LOGIN</button>
  </form>
  <a href="index.php?p=register">REGISTER</a>
</div>
