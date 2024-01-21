<!DOCTYPE html>

<?php
    require "koneksi.php";

    // $nomor = "";
    $tanggal = "";
    $jam = "";
    $susunan_acara = ""; 
    $keterangan_kerja = "";
    $kerabat_kerja = "";
    $keterangan_kehadiran = "";

    if(isset($_GET['ubah'])){
        $nomor = $_GET['ubah'];
        
        $query = "SELECT * FROM data_pekerja WHERE nomor = '$nomor'";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $nomor = $result['nomor'];
        $tanggal = $result['tanggal'];
        $jam = $result['jam'];
        $susunan_acara = $result['susunan_acara'];
        $keterangan_kerja = $result['keterangan_kerja'];
        $kerabat_kerja = $result['kerabat_kerja'];
        $keterangan_kehadiran = $result['keterangan_kehadiran'];

       
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Surat BAWASLU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="icon" href="Logo-Bawaslu-2018-Icon-PNG-HD.png">
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

<div class="container">
    <form action="proses.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $nomor ?>"" name="nomor" class="mt-4">
            <div class="mb-3 row mt-4">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input autocomplete="off" required type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo $tanggal; ?>">
                </div>
            </div>
            <div class="mb-3 row mt-4">
                <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-10">
                    <input autocomplete="off" required type="text" name="jam" class="form-control" id="jam" value="<?php echo $jam; ?>">
                </div>
            </div>
            <div class="mb-3 row mt-4">
                <label for="susunan-acara" class="col-sm-2 col-form-label">Susunan Acara</label>
                <div class="col-sm-10">
                    <input autocomplete="off" required type="text" name="susunan_acara" class="form-control" id="susunan_acara" value="<?php echo $susunan_acara; ?>">
                </div>
            </div>
            <div class="mb-3 row mt-4">
                <label for="keterangan-kerja" class="col-sm-2 col-form-label">Keterangan Kerja</label>
                <div class="col-sm-10">
                    <input autocomplete="off" required name="keterangan_kerja" class="form-control" id="keterangan_kerja" value="<?php echo $keterangan_kerja; ?>">
                    </input>
                </div>
            </div>
            <div class="mb-3 row mt-4">
                <label for="kerabat-kerja" class="col-sm-2 col-form-label">Kerabat Kerja</label>
                <div class="col-sm-10">
                    <input autocomplete="off" required name="kerabat_kerja" class="form-control" id="kerabat_kerja" value="<?php echo $kerabat_kerja; ?>">
                    </input>
                </div>
            </div>
            <div class="mb-3 row mt-4">
                <label for="keterangan-kehadiran" class="col-sm-2 col-form-label">Keterangan Kehadiran</label>
                <div class="col-sm-10">
                    <input autocomplete="off" required type="text" name="keterangan_kehadiran" class="form-control" id="keterangan_kehadiran" value="<?php echo $keterangan_kehadiran; ?>">
                </div>
            </div>
        
            <div class="mb-3 row mt-4">
                <div class="col">
                    <?php
                        if(isset($_GET['ubah'])){
                            ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Simpan Perubahan
                        </button>
                        <?php
                        }else{
                            ?>
                            <button type="submit" name="aksi" value="add" class="btn btn-primary">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                Tambahkan
                            </button>
                            <?php
                        }
                        ?>
                    <a href="data_pekerja.php" type="button" class="btn btn-danger">
                        <i class="fa fa-reply" aria-hidden="true"></i>
                        Batal
                    </a>
            </div>
            
        </div>
        
    </form>
    
</div>
    
    
    
    
    
    
</body>
</html>