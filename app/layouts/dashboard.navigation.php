<nav class="navbar navbar-expand-md navbar-dark bg-success sticky-top flex-md-wrap p-0">
      <a class="navbar-brand bg-success col-md-2 mr-0 text-center" href="index.php">Team Alpha</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample04" style="">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="map.php">Map</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="drivers.php">Drivers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trips.php">Trips</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fare/index.php">Fare</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php">Reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Add Administrator</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["admin_name"]; ?></a>
            <div class="dropdown-menu dropdown-menu-right pull-right p-0" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="#">Account Settings</a>
              <a class="dropdown-item" href="#">Help</a>
              <a class="dropdown-item" href="logout.php">Sign Out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
