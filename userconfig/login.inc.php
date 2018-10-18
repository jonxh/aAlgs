<?php

// Check if you come from login page
  if (isset($_POST['login-submit'])) {
    require 'db.inc.php';
      $username = $_POST['login-username'];
      $password = $_POST['login-password'];
// Check if username or password is empty
    if (empty($username) or empty($password)) {
      header("location: ../index.php?p=login&error=emptyfields&username=" . $username);
      exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE u_username=?";
        $stmt = mysqli_stmt_init($conn);
// Check for error in preparing
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?p=login&error=sqlerror_prepare");
        exit();
      }
// Doing stuff
      else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
          $pwdCheck = password_verify($password, $row['u_password']);
// Check if password is correct
          if ($pwdCheck == false) {
            header("location: ../index.php?p=login&error=wrongpassword&username=" . $username);
            exit();
          }
// Login success
          else if ($pwdCheck == true) {
            session_start();
            $_SESSION['u_id'] = $row['u_id'];
            $_SESSION['u_username'] = $row['u_username'];
            $_SESSION['u_cross'] = $row['u_cross'];
            $_SESSION['u_role_rank'] = $row['u_role_rank'];

            header("location: ../index.php?success=login");
            exit();
          }
// If wrong password..
          else {
            header("location: ../index.php?p=login&error=wrongpassword&username=" . $username);
            exit();
          }
        }
// If there is no user by that name
        else {
          header("location: ../index.php?p=login&error=nouser");
          exit();
        }
      }
    }
  }
// If they didn't get here from a login form
  else {
    header("location: ../index.php?p=login");
    exit();
  }
