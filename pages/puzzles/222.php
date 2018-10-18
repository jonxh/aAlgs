<?php
  function set() {
?>

    <div style="padding:10px;text-align:center;">

<!-- Cll Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=<?php echo $_GET['puzzle']; ?>&algset=cll">
        <div class="card-header">CLL</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=2&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>&case=RUR3URU2R3" alt="Card image cap">
        </div>
        </a>
      </div>

<!-- EG-1Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=<?php echo $_GET['puzzle']; ?>&algset=eg1">
        <div class="card-header">EG-1</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=2&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>&case=x2R3UL3U2RU3R3U2RLU3x2RUR3URU2R3" alt="Card image cap">
        </div>
        </a>
      </div>

<!-- EG-2 Card -->
      <div class="card border-dark mb-3" style="max-width:100px;display:inline-block;border-radius:6px;">
        <a href="index.php?p=algs&puzzle=<?php echo $_GET['puzzle']; ?>&algset=eg2">
        <div class="card-header">EG-2</div>
        <div class="card-body" style="padding:5px;">
          <img class="card-img-top" src="visualcube/visualcube.php?fmt=svg&size=200&bg=t&pzl=2&sch=<?php if (isset($_SESSION['u_id'])) { echo $_SESSION['u_cross']; } ?>&case=x2FRU3R3U3RUR3F3RUR3U3R3FRF3x2RUR3URU2R3" alt="Card image cap">
        </div>
        </a>
      </div>

    </div>

<?php
  }
?>
