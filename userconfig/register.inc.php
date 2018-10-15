<?php

  require 'db.inc.php';

  if (isset($_POST['register-submit'])) {

    $username = $_POST['register-username'];
    $password = $_POST['register-password'];
    $pwd_repeat = $_POST['register-repeat'];

    if (empty($username) or empty($password) or empty($pwd_repeat)) {
      header("location: ../register.php?error=emptyfields&username=" . $username);
      exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
      header("location: ../register.php?error=invalidusername");
      exit();
    }
    else if ($password !== $pwd_repeat) {
      header("location: ../register.php?error=passwordcheck");
      exit();
    }
    else {

      $sql = "SELECT u_username FROM users WHERE u_username=?";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=sqlerror_prepare");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result_Check = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
          header("location: ../register.php?error=usernametaken");
          exit();
        }
         else {
           $sql="INSERT INTO users (u_username, u_password) VALUES (?, ?)";
           $stmt = mysqli_stmt_init($conn);
           if (!mysqli_stmt_prepare($stmt, $sql)) {
             header("location: ../register.php?error=sqlerror_insert");
             exit();
           }
           else {
             $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

             mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
             mysqli_stmt_execute($stmt);
             header("location: ../login.php?register=success");
             exit();
           }
         }
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }
  else {
    header("location: ../register.php");
    exit();
  }

?>
