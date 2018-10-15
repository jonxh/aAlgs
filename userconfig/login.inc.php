<?php

// Check if you come from login page
  if (isset($_POST['login-submit'])) {
    require 'db.inc.php';
      $username = $_POST['login-username'];
      $password = $_POST['login-password'];
// Check if username or password is empty
    if (empty($username) or empty($password)) {
      header("location: ../login.php?error=emptyfields");
      exit();
    } else {
        $sql = "SELECT * FROM users WHERE u_username=?";
        $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login.php?error=sqlerror_prepare");
        exit();
      } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
          $pwdCheck = password_verify($password, $row['u_password']);
// Check if password is correct
          if ($pwdCheck == false) {
            header("location: ../login.php?error=wrongpassword");
            exit();
          } else if ($pwdCheck == true) {
// Login success
            session_start();
            $_SESSION['u_id'] = $row['u_id'];
            $_SESSION['u_username'] = $row['u_username'];

            header("location: ../index.php?login=success");
            exit();
          } else {
            header("location: ../login.php?error=wrongpassword");
            exit();
          }
        } else {
          header("location: ../login.php?error=nouser");
          exit();
        }
      }
    }
  } else {
    header("location: ../login.php");
    exit();
  }
