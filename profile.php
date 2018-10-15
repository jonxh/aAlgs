<?php
  require "header.php";
?>

  <main class="container">
<?php
    if (isset($_SESSION['u_id'])) {
?>
    Hey there <?php echo $_SESSION['u_username']; ?>
<?php
    } elseif (!isset($_SESSION['u_id'])) {
      header('location:index.php');
    }
?>
  </main>

<?php
  // require "footer.php";
?>
