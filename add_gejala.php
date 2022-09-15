<?php 

    include 'koneksi.php';
    
    if (isset($_POST['simpan'])) {

      $kode_gejala                = $_POST['kode_gejala'];
      $nama_gejala              = $_POST['nama_gejala'];
      $nilai                  = $_POST['nilai'];

        $sql = "INSERT INTO tb_gejala values('$kode_gejala', '$nama_gejala', '$nilai')";

        $result = mysqli_query($db,$sql);
            echo '<script>alert("Data Berhasil Ditambahkan");document.location.href="gejala.php";</script>';
        }else{
            echo '<script>alert("Data Gagal Ditambahkan");document.location.href="gejala.php";</script> ';
        }
        ?>