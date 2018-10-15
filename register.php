<?php
  require "header.php";
?>

  <main class="userformdiv">
    <h1>Register</h1>
    <div class="userform">
      <form action="userconfig/register.inc.php" method="post">
        <input type="text" name="register-username" value="<?php if (isset($_GET['username'])) { echo $_GET['username']; } ?>" placeholder="Username"><br>
        <input type="password" name="register-password" placeholder="Password"><br>
        <input type="password" name="register-repeat" placeholder="Repeat password"><br>
        <button type="submit" name="register-submit">Register</button>
      </form>
      <a href="login.php">LOGIN</a>
    </div>
  </main>

<?php
//  require "footer.php";
?>
