<?php

  require "koneksi.php";

  $query = "SELECT * FROM data_pekerja";
  $sql = mysqli_query($conn, $query);

  $no = 0;
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVRI Kupang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="icon" href="assets/img/ntt.png">
    <link rel="stylesheet" href="halaman_admin.css">
</head>
<body>

<?php
  session_start();

  //  navbar
  require "navbar.php";

  if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal untuk login");
  }
  ?>
  
  <!-- Judul -->
  <div class="container">
      <h1 class="mt-4">LAPORAN PENGARAH TEKNIK</h1>
      <figure>
      <blockquote class="blockquote">
        <p>Berikut adalah data yang telah disimpan di database.</p>
      </blockquote>
      </figure>
      <a href="kelola.php" type="button" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i>
        Tambah Data
      </a>
      <div class="table-responsive">
          <table class="table align-middle table-bordered table-hover">
            <thead>
              <tr>
                 <th><center>No</center></th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Susunan Acara</th>
                <th>Keterangan Kerja</th>
                <th>Kerabat Kerja</th>
                <th>Keterangan Kehadiran</th>
              </tr>
            </thead>
            <tbody?>
              <?php
                while($result = mysqli_fetch_assoc($sql)){

              ?>
              <tr>
                <td><center>
                  <?php echo ++$no; ?>.
                </center></td>
                <!-- <td><?php echo $result['nomor']; ?></td> -->
                <td><?php echo $result['tanggal']; ?></td>
                <td><?php echo $result['jam']; ?></td>
                <td><?php echo $result['susunan_acara']; ?></td>
                <td><?php echo $result['keterangan_kerja']; ?></td>
                <td><?php echo $result['kerabat_kerja']; ?></td>
                <td><?php echo $result['keterangan_kehadiran']; ?></td>
                <td>
                  <a href="kelola.php?ubah=<?php echo $result['nomor']; ?>" type="button" class="btn btn-success btn-sm">
                    <i class="fa fa-pencil"></i>
                    Edit
                  </a>
                  <a href="proses.php?hapus=<?php echo $result['nomor']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')">
                    <i class="fa fa-trash"></i>
                  </a>
                  <a name="download" href="proses.php?download=<?php echo $direction['file_surat']; ?>" type="button" class="btn btn-warning btn-sm"><i class="fa fa-download">Download</i></a>
                </td>
              </tr>
                <?php
                }
                ?>
          </tbody>
          </table>
        </div>
  </div>

  

</body>
</html>