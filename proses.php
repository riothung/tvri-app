<?php

    require "koneksi.php";

/* CREATE data */

    if(isset($_POST['aksi'])){
        if(($_POST['aksi']) == "add"){
            
                // $nomor = $_POST['nomor'];
                $tanggal = $_POST['tanggal'];
                $jam = $_POST['jam'];
                $susunan_acara = $_POST['susunan_acara'];
                $keterangan_kerja = $_POST['keterangan_kerja'];
                $kerabat_kerja = $_POST['kerabat_kerja'];
                $keterangan_kehadiran = $_POST['keterangan_kehadiran'];

                $query = "INSERT INTO data_pekerja VALUES(null, '$tanggal', '$jam', '$susunan_acara', '$keterangan_kerja', '$kerabat_kerja', '$keterangan_kehadiran')";
                $sql = mysqli_query($conn, $query);

                if($sql){
                    header("Location: data_pekerja.php");
                }else{
                    echo $query;
                }
/*        */

/* UPDATE data */

            }elseif($_POST['aksi']){

                $nomor = $_POST['nomor'];
                $tanggal = $_POST['tanggal'];
                $jam = $_POST['jam'];
                $susunan_acara = $_POST['susunan_acara'];
                $keterangan_kerja = $_POST['keterangan_kerja'];
                $kerabat_kerja = $_POST['kerabat_kerja'];
                $keterangan_kehadiran = $_POST['keterangan_kehadiran'];

                $queryShow = "SELECT * FROM data_pekerja WHERE nomor = '$nomor'";
                $sqlShow = mysqli_query($conn, $queryShow);
                $result = mysqli_fetch_assoc($sqlShow);


                $query = "UPDATE data_pekerja SET nomor = '$nomor', tanggal = '$tanggal', jam = '$jam', susunan_acara = '$susunan_acara', keterangan_kerja = '$keterangan_kerja', kerabat_kerja = '$kerabat_kerja', keterangan_kehadiran = '$keterangan_kehadiran' WHERE nomor = '$nomor'";
                $sql = mysqli_query($conn, $query);
                header("Location: data_pekerja.php");
            }
    }

    /*        */


/* DELETE data */

    if(isset($_GET['hapus'])){
        $nomor = $_GET['hapus'];

        $queryShow = "SELECT * FROM data_pekerja WHERE nomor = '$nomor'";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        $query = "DELETE FROM data_pekerja WHERE nomor = '$nomor'";
        $sql = mysqli_query($conn, $query);

        header("Location: data_pekerja.php");
    }

/*        */



?>