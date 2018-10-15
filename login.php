<?php
  require "header.php";
?>

  <main class="userformdiv">
    <h1>Login</h1>
    <div class="userform">
      <form action="userconfig/login.inc.php" method="post">
        <input type="text" name="login-username" placeholder="Username"><br>
        <input type="password" name="login-password" placeholder="Password"><br>
        <button type="submit" name="login-submit">LOGIN</button>
      </form>
      <a href="register.php">REGISTER</a>
    </div>
  </main>

<?php
//  require "footer.php";
?>
