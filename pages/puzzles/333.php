<?php
  function set() {
?>

    <div style="padding:10px;text-align:center;">

<!-- OLL Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=<?php echo $_GET['puzzle']; ?>&algset=oll">
        <div class="card-header">OLL</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=3&stage=oll&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>&case=RUR3URU2R3" alt="Card image cap">
        </div>
        </a>
      </div>

<!-- PLL Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=<?php echo $_GET['puzzle']; ?>&algset=pll">
        <div class="card-header">PLL</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=3&stage=ll&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>&case=RUR3U3R3FR2U3R3U3RUR3F3" alt="Card image cap">
        </div>
        </a>
      </div>

<!-- COLL Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=<?php echo $_GET['puzzle']; ?>&algset=coll">
        <div class="card-header">COLL</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=3&stage=coll&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>&case=RUR3URU2R3" alt="Card image cap">
        </div>
        </a>
      </div>

<!-- OLLCP Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=<?php echo $_GET['puzzle']; ?>&algset=ollcp">
        <div class="card-header">OLLCP</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=3&stage=coll&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>&case=FRUR3U3F3" alt="Card image cap">
        </div>
        </a>
      </div>

<!-- ZBLL Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=<?php echo $_GET['puzzle']; ?>&algset=zbll">
        <div class="card-header">ZBLL</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=3&stage=ll&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>&case=RUR3URU2R3" alt="Card image cap">
        </div>
        </a>
      </div>

<!-- 1LLL Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=<?php echo $_GET['puzzle']; ?>&algset=1lll">
        <div class="card-header">1LLL</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=3&stage=ll&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>&case=FRUR3U3F3" alt="Card image cap">
        </div>
        </a>
      </div>

    </div>

<?php
  }
?>
