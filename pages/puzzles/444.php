<?php
  function set() {
?>

    <div style="padding:10px;text-align:center;">

<!-- OLL Parity Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=<?php echo $_GET['puzzle']; ?>&algset=oll_parity">
          <div class="card-header">OLL-P</div>
          <div class="card-body" style="padding:5px;">
            <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=4&stage=ll&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>&case=rU2xrU2rU2r3U2lU2r3U2rU2r3U2r3" alt="Card image cap">
          </div>
        </a>
      </div>

<!-- PLL parity Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=<?php echo $_GET['puzzle']; ?>&algset=pll_parity">
        <div class="card-header">PLL-P</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=4&stage=ll&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>&case=r2R2U2r2R2Uw2r2R2Uw2U2" alt="Card image cap">
        </div>
        </a>
      </div>

    </div>
<?php
  }
?>
