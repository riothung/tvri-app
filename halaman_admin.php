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
    /* .body {
    background-color: #e2edff;
    } */

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
    }
  
    .profileImage {
      width: 200px;
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

  .footer {
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.5)));
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  }

  .footer .box-container {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: (minmax(25rem, 1fr))[auto-fit];
        grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap: 1.5rem;
    display: flex;
      justify-content: center;
      align-items: center;
  }

  .footer .box-container .box h3 {
    font-size: 2rem;
    padding: 1.5rem 0;
    color: #fff;
  }

  .footer .box-container .box a {
    display: block;
    font-size: 1.4rem;
    color: #fff;
    padding: 1rem 0;
  }

  .footer .box-container .box a i {
    color: #8ca2ba;
    padding-right: .5rem;
  }

  .footer .box-container .box a:hover {
    color: #8ca2ba;
  }

  .footer .box-container .box a:hover i {
    padding-right: 2rem;
  }

  .footer .credit {
    text-align: center;
    margin-top: 2.5rem;
    padding: 1rem;
    padding-top: 2.5rem;
    font-size: 2rem;
    color: #fff;
  }

  .footer .credit span {
    color: #8ca2ba;
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
    <!-- Akhir navbar -->

    <!-- Beranda -->
    <!-- warna #e2edff -->
    <section class="deskripsi">
      <div class="container">
        <div class="profile">
          <img class="rounded-circle profileImage" src="Logo-Bawaslu-2018-Icon-PNG-HD.png" alt=""/>
          <h2>BAWASLU Kabupaten Kupang</h2>
          <p>
            Badan Pengawas Pemilu atau Bawaslu dibentuk berdasarkan perintah Undang - Undang no 22 Tahun 2007 tentang Penyelenggara Pemilu. Sebelumnya, Pengawas Pemilu merupakan lembaga adhoc yaitu Panitia Pengawas Pemilu atau Panwaslu.
            Tepatnya tahun 1982 uu memerintahkan pembentukan Panitia Pengawas Pelaksanaan Pemilu atau Panwaslak Pemilu, yang melekat pada Lembaga Pemilihan Umum atau LPU. Baru pada tahun 2003, Panwaslu dilepaskan dari struktur Komisi
            Pemilian Umum atau KPU. Kewenangan utama Pengawas Pemilu adalah mengawasi pelaksanaan tahapan Pemilu, menerima pengaduan, serta menangani kasus-kasus pelanggaran administrasi, pidana Pemilu dan kode etik. Rabu, 12 April Tahun
            2017 Presiden Joko Widodo melantik Anggota Bawaslu Periode 2017-2022 dan Rapat Pleno Bawaslu menetapkan Ketua Bawaslu adalah Abhan.
          </p>
          <a href="https://kupangkab.bawaslu.go.id/profil/  sejarah-pengawasan-pemilu">Selengkapnya</a>
        </div>
      </div>
    </section>

    <section class="about" id="about">

    <div class="image">
        <img src="Logo-Bawaslu-2018-Icon-PNG-HD.png" alt="">
    </div>

    <div class="content">
        <h3>Tentang Kami</h3>
        <p>Badan Pengawas Pemilu adalah lembaga negara yang memiliki tugas pokok dan fungsi melakukan pengawasan terhadap seluruh tahapan pemilihan dan pemilu di seluruh wilayah Negara Kesatuan Republik Indonesia.</p>
    </div>

  </section>

  <!-- Footer -->
  <section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i>+6281 246 273 242</a>
            <a href="#"> <i class="fas fa-envelope"></i>mario.thung@gmail.com</a>
            <a href="https://goo.gl/maps/mwstut3K9qjEwxnEA"><i class="fas fa-map"></i>kupang, Indonesia </a>
        </div>

    </div>

    <div class="credit">Created by <span>Rio Thung</span></div>

</section>

<!-- Akhir Footer -->

    <!-- Akhir Beranda -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
