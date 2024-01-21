
<nav id="navbar-example2" class="navbar navbar-expand-lg" style="background-color: #8ca2ba" class="shadow-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="halaman_admin.php">
        <img src="assets/img/ntt.png" alt="Logo" width="23" height="24"
          class="d-inline-block align-text-top">
        APLIKASI PENDATAAN PEKERJA
      </a>
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="halaman_admin.php" target="konten">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_pekerja.php">Data Pekerja</a>
            </li>
          </ul>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
              if ($_SESSION['level'] == "admin"){
                echo "Admin";
              }elseif($_SESSION['level'] == "adminbayangan"){
                echo "Rio";
              }
              ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </nav>