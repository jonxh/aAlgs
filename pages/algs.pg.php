
<?php
// Setting variables
  if (isset($_GET['puzzle']))   { $pzl = $_GET['puzzle']; }
  if (isset($_GET['algset']))   { $set = $_GET['algset']; }
  if (isset($_GET['alg']))      { $alg = $_GET['alg']; }
  if (isset($_GET['case']))     { $id = $_GET['case']; }

  if (isset($_GET['puzzle'])) {

    if (isset($_GET['algset'])) {

              if ($_GET['algset'] == 'zbll') {
                if (isset($_GET[''])) {

                }

                // Special: If algset is ZBLL
              } elseif ($_GET['algset'] == '1lll') {
                if (isset($_GET[''])) {

                }

                // Special: If algset is 1LLL
              }
      if (isset($_GET['algs'])) {
        include "case.php";
        setcase();
        exit();
        // Show case for alg
      }
      include "puzzles/".$pzl."/".$set.".php";
      algs();
      exit();
      // Show algs for algset
    }
    include "puzzles/".$pzl.".php";
    set();
    exit();
    // Show algsets for puzzle
  }
  else {
?>

    <div style="padding:10px;text-align:center;">

<!-- CLL Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=222">
        <div class="card-header">2x2x2</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=2&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>" alt="Card image cap">
        </div>
        </a>
      </div>

<!-- EG-1 Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=333">
        <div class="card-header">3x3x3</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=3&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>" alt="Card image cap">
        </div>
        </a>
      </div>

<!-- EG-2 Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=444">
        <div class="card-header">4x4x4</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=4&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>" alt="Card image cap">
        </div>
        </a>
      </div>

    </div>

<?php
  }

?>
