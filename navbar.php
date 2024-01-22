
<nav id="navbar-example2" class="navbar navbar-expand-lg" style="background-color: #365486" class="shadow-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="halaman_admin.php">
        <img src="assets/img/ntt.png" alt="Logo" width="50px" height="50px"
          class="d-inline-block align-text-top">
        <span class="text-white">APLIKASI PENDATAAN PEKERJA </span>
      </a>
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="halaman_admin.php" >Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="data_pekerja.php">Data Pekerja</a>
            </li>
          </ul>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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