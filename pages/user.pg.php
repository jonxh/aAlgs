<?php

    include "userconfig/db.inc.php";
    if (isset($_GET['user'])) { $user = $_GET['user'];
      $sql_user = "SELECT * FROM users WHERE u_id = $user";
      $qry_user = mysqli_query($conn,$sql_user);
      $row_user = mysqli_fetch_array($qry_user);
    }

    if (isset($_GET['user'])) {
      if (!empty($row_user[0])) {
?>
        <div class="card text-center" style="max-width:800px;margin:auto;">
          <div class="card-header">
            <ul class="nav nav-pills card-header-pills pull-right" id="myTab" role="tablist">
              <li class="nav-item j-nav-pills">
               <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile-tab-content" role="tab" aria-controls="profile-tab-content" aria-selected="true"><?php echo $row_user['u_username']; ?></a>
              </li>
<?php
              if ($_SESSION['u_role_rank'] == 2 or $_SESSION['u_id'] == $_GET['user']) {
?>
              <li class="nav-item">
                <a class="nav-link" id="edit-profile-tab" data-toggle="tab" href="#edit-profile-tab-content" role="tab" aria-controls="edit-profile-tab-content" aria-selected="false">Edit Profile</a>
              </li>
<?php
}
?>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="profile-tab-content" role="tabpanel" aria-labelledby="profile-tab">

                <h2 style="font-weight:bold;"><?php echo $row_user['u_firstname'] . " " . $row_user['u_lastname'];?></h2>
                <span class="badge badge-secondary"><?php
                function getAge($then) {
                    $then = date('Ymd', strtotime($then));
                    $diff = date('Ymd') - $then;
                    return substr($diff, 0, -4);
                }
                echo getAge($row_user['u_birthdate']);
                ?></span>
                <span class="badge badge-secondary"><?php echo $row_user['u_nationality']; ?></span><br>
<?php
                $mains = explode(" ",$row_user['u_mains']);
                for ($i=0; $i < count($mains); $i++) {
                  ?><span style="font-size:2em;" class="cubing-icon event-<?php echo $mains[$i]; ?>"></span><?php
                }
?>
                <hr/>
                <?php echo "<p>" . $row_user['u_description'] . "</p>"; ?>
              </div>
              <div class="tab-pane fade" id="edit-profile-tab-content" role="tabpanel" aria-labelledby="edit-profile-tab">

                Edit Profile

              </div>
            </div>
          </div>
        </div>
<?php
      } else {
        header('location:index.php?p=user');
      }
    } else {

      $sql_user = "SELECT * FROM users";
      $qry_user = mysqli_query($conn,$sql_user);
      echo "<ul class=\"list-group\">";
      while ($user_row = mysqli_fetch_array($qry_user)) {
?>
        <li class="list-group-item"><a href="index.php?p=user&user=<?php echo $user_row['u_id']; ?>"><?php echo $user_row['u_username']; ?> </a></li>
<?php
      }
      echo "</ul>";

    }
?>
