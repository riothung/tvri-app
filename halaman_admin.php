<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TVRI Kupang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="halaman_admin.css"/>
    <link rel="icon" href="assets/img/ntt.png"/>
  </head>
  <style>
    .profile {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      /* margin-top: 20px; */
      padding-top: 80px;
      padding-bottom: 4rem;
    }
    
    /* .rounded-circle {
      margin-top: 80px;
    } */
    p{
      text-align: justify;
      color: #0F1035;
    }
    h5{
      color: #0F1035;
    }
  h2{
    color: #0F1035;
  }
    .profileImage {
      width: 300px;
      padding-bottom: 3rem;
    }

    .about {
    background: #D1D2D3;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    gap: 2rem;
  }

  .about .image {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 42rem;
            flex: 1 1 42rem;
    padding-right: 5rem;
    padding-bottom: 5rem;
  }

  .about .image img {
    width: 75%;
    /* -webkit-box-shadow: 4rem 4rem 0 rgba(0, 0, 0, 0.1);
            box-shadow: 4rem 4rem 0 rgba(0, 0, 0, 0.1); */
            padding-top: 3rem;
            padding-left: 5rem;
  }

  .about .content {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 42rem;
            flex: 1 1 42rem;
  }

  .about .content h3 {
    font-size: 3rem;
    color: #8ca2ba;
  }

  .about .content p {
    font-size: 1.5rem;
    color: #10221b;
    padding: 1rem 0;
    line-height: 2;
    text-align: justify;
    padding-right: 2rem;
  }


  .footer p {
    color: #D1D2D3;
    text-align: center;
    justify-content: center;
  }

  </style>

  <body>
    <!--  navbar -->
    <?php
  session_start();
  
  require "navbar.php";
  
  if ($_SESSION['level'] == ""){
    header("location:index.php?pesan=gagal untuk login");
  }
  ?>

  
<?php
  // Path untuk gambar
  $ntt = 'assets/img/ntt.png';
  $gmr1 ='assets/img/46.jpg';
  $gmr2 ='assets/img/47.jpg';
  $gmr3 ='assets/img/49.jpg';
  ?>
    <!-- Akhir navbar -->

    <!-- Beranda -->
    <!-- warna #e2edff -->
    <section class="deskripsi">
      <div class="container">
        <div class="profile">
          <img class="rounded profileImage" src="<?php echo $ntt; ?>" alt=""/>
          <h2>TVRI Nusa Tenggara Timur</h2>
          <h2>Sejarah Singkat</h2>
          <p>
          Era pertelevisian di provinsi Nusa Tenggara Timur ditandai dengan berdirinya stasiun LPP TVRI Nusa Tenggara Timur. Bermula dengan pendirian TVRI Stasiun Keliling (SPK) Kupang dengan tugas meliput dan memproduksi program dan berita untuk selanjutnya dikirim ke TVRI pusat Jakarta untuk disiarkan secara Nasional
          Tahun 2004 TVRI SPK Kupang berganti nomenklatur menjadi TVRI Nusa Tenggar Timur dan pada pertengahan tahun 2009 atau tepatnya tanggal 29 Juli pada momen ulang tahun TVRI nusa tenggara timur, untuk pertama kalinya dilaksanakan siaran lokal selama empat jam setiap hari hingga saat ini.
          Pada tahun 1997 didirikan TVRI Sektor Transmisi Kupang dan Oben dengan tinggi Menara masing-masing 40 meter dan 150 meter. Saat itu siaran dikirim melalui microwave kupang menuju transmisi oben untuk selanjutnya dipancarkan dengan kekuatan 15 kilo watt, gelombang VHF.
          <a href="https://tvrintt.co.id/index.php" style="text-decoration: none;">Selengkapnya</a>
        </div>
      </div>
    </section>

    <section class="" id="about">
   <div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <img src="<?php echo $gmr1; ?>" style="height: 200px ; width: 500px;;" alt="">
        <h5 class="card-title">Busana Daur Ulang Sampah Warnai Hari Sumpah Pemuda Di SMK Floras Focolodorawe</h5>
        <p class="card-text">Dalam rangka memperingati hari sumpah pemuda dan bulan bahasa, siswa SMK Floras, Desa Focolodorawe, Kecamata Boawae, Nagekeo, mengenakan pakaian yang berbeda dari biasanya. Mereka mengenakan busana yang berasal dari barang barang bekas yang didaur ulang oleh para siswa. Busana yang dirancang itu berbahan dasar plastik, karung dan bagan lokal seperti daun lontar dan daun pandan. Selain itu, para siswa mempraktekan masak pangan lokal..</p>
        <a href="https://tvrintt.co.id/index.php" class="btn btn-primary" style="text-decoration: none;">Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mb-3">
    <div class="card">
      <div class="card-body">
      <img src="<?php echo $gmr2; ?>" style="height: 250px; width: 500px;;" alt="">
        <h5 class="card-title">Pemkab Matim Kirim 30 Paduan Suara Wakili NTT Ikut Pesparani Nasional III di Jakarta</h5>
        <p class="card-text">Pemerintah Kabupaten Manggarai Timur mengirimkan sebanyak 30 anggota paduan suara dewasa campuran (PSDC) mewakili Provinsi Nusa Tenggara Timur untuk mengikuti ajang Pesta paduan suara gerejani (Pesparani) Nasional III di Jakarta.</p>
        <a href="https://tvrintt.co.id/index.php" class="btn btn-primary" style="text-decoration: none;">Selengkapnya</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="<?php echo $gmr3; ?>" style="height: 250px; width: 500px;;" alt="">
        <h5 class="card-title">Warga Wae Rebo Khawatir, Komodo Semakin Agresif</h5>
        <p class="card-text">Warga Kampung Wae Rebo di Taman Nasional Komodo, Manggarai Barat, Nusa Tenggara Timur (NTT) khawatir akan perilaku komodo yang hidup berdampingan dengan warga di pulau Rinca. ketakutan ini semakin membayangi warga pasca Tangan Seorang Pemuda bernama Muhamimi Ardiansyah Nampira yang berusia 18 tahun terluka cukup serius karena digigit Komodo, beberapa waktu lalu.</p>
        <a href="https://tvrintt.co.id/index.php" class="btn btn-primary" style="text-decoration: none;">Selengkapnya</a>
      </div>
    </div>
  </div>
</div
  
  </section>

  <!-- Footer -->
  <section class="footer">
  <footer class="mt-5 p-3 bg-dark text-white">
      <div class="container">
        <p class="mb-0 mx-auto">© 2024 Yohanis Karmoi</p>
      </div>
    </footer>
</section>

<!-- Akhir Footer -->

    <!-- Akhir Beranda -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
