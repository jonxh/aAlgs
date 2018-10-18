<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/css/cubing-icons.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>aAlgs<?php if (isset($_GET['p'])) { echo " - " . $_GET['p']; } ?></title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand j-nav-logo" href="index.php">aAlgs</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=algs">ALGS<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=user">USERS<span class="sr-only">(current)</span></a>
          </li>
        </ul>
<?php
      if (isset($_SESSION['u_id'])) {
?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo strtoupper($_SESSION['u_username']);?>&nbsp;<span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink-user">
              <a class="dropdown-item" href="index.php?p=user&user=<?php echo $_SESSION['u_id']; ?>">PROFILE</a>
              <a class="dropdown-item" href="index.php?p=user&user=<?php echo $_SESSION['u_id']; ?>#edit-profile-tab">EDIT PROFILE</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="userconfig/logout.inc.php">LOGOUT</a>
            </div>
          </li>
        </ul>
      </div>
<?php
      } elseif (!isset($_SESSION['u_id'])) {
?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=login">LOGIN<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
<?php
      }
?>
    </nav>
    <main class="container" style="padding:10px;">
<?php
      if (!empty($_GET['p'])) {
        $pages_dir= 'pages';
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);

        $p = $_GET['p'];
        if (in_array($p .'.pg.php', $pages)) {
          include ($pages_dir .'/'. $p .'.pg.php');
        } else {
          echo ("Sorry, this site does not exist.");
        }
      } else {
        $pages_dir= 'pages';
        include ($pages_dir .'/menu.pg.php');
      }
?>
    </main>
  </body>
</html>
