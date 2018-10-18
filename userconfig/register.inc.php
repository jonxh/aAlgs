<?php

  require 'db.inc.php';

// Check if user got here from registration form
  if (isset($_POST['register-submit'])) {

    $username = $_POST['register-username'];
    $password = $_POST['register-password'];
    $pwd_repeat = $_POST['register-repeat'];

// Check if there are empty fields
    if (empty($username) or empty($password) or empty($pwd_repeat)) {
      header("location: ../index.php?p=register&error=emptyfields&username=" . $username);
      exit();
    }
// Check for bad characters
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      header("location: ../index.php?p=register&error=invalidusername");
      exit();
    }
// Check if password is repeated correctly
    else if ($password !== $pwd_repeat) {
      header("location: ../index.php?p=register&error=passwordcheck");
      exit();
    }
// If everything works correctly:
    else {
      $sql = "SELECT u_username FROM users WHERE u_username=?";
      $stmt = mysqli_stmt_init($conn);
// Check if preparing goes wrong
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?p=register&error=sqlerror_prepare");
        exit();
      }
// If everything works correctly:
      else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result_Check = mysqli_stmt_num_rows($stmt);
// Check if username is taken
        if ($resultCheck > 0) {
          header("location: ../index.php?p=register&error=usernametaken");
          exit();
        }
// If not taken, register user
         else {
           $sql="INSERT INTO users (u_username, u_password, u_regdate) VALUES (?, ?, NOW())";
           $stmt = mysqli_stmt_init($conn);
// If something goes wrong with registration:
           if (!mysqli_stmt_prepare($stmt, $sql)) {
             header("location: ../index.php?p=register&error=sqlerror_insert");
             exit();
           }
// Now user is registered
           else {
             $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

             mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
             mysqli_stmt_execute($stmt);
             header("location: ../index.php?p=login&success=register&username=" . $username);
             exit();
           }
         }
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }
// If they didn't get to this page from registration form they get kicked out
  else {
    header("location: ../index.php?p=register");
    exit();
  }

?>
