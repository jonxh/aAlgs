<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>aAlgs</title>
  </head>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand j-nav-logo" href="index.php">aAlgs</a>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <li><a href="index.php">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CATEGORIES&nbsp;<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><img src="illustrations/cube2.svg" width="25" height="25"><span style="float:right;">2x2</span></a></li>
            <li><a href="#"><img src="illustrations/cube3.svg" width="26" height="26"><span style="float:right;">3x3</span></a></li>
            <li><a href="#"><img src="illustrations/cube4.svg" width="26" height="26"><span style="float:right;">4x4</span></a></li>
            <li><a href="#"><img src="illustrations/cube5.svg" width="27" height="27"><span style="float:right;">5x5</span></a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
<?php
        if (isset($_SESSION['u_id'])) {
?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo strtoupper($_SESSION['u_username']);?>&nbsp;<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php">PROFILE</a></li>
            <li><a href="userconfig/logout.inc.php">LOGOUT</a></li>
          </ul>
        <li>
<?php
        } elseif (!isset($_SESSION['u_id'])) {
?>
        <li><a class="header-link" style="float:right;" href="login.php">LOGIN</a></li>
<?php
        }
?>
      </ul>
    </div>
  </nav>
