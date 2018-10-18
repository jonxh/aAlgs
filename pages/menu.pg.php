<?php

  if (isset($_GET['success'])) {
    if ($_GET['success'] == "login") {
      ?><div class="alert alert-success" role="alert">Welcome <?php echo $_SESSION['u_username']; ?>!</div><?php
    } else if ($_GET['success'] == "logout") {
      ?><div class="alert alert-success" role="alert">You have now signed out.</div><?php
    }
  }

?>
