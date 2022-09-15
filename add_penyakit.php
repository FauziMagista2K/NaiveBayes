<?php 

    include 'koneksi.php';
    
    if (isset($_POST['simpan'])) {

      $kode_penyakit               = $_POST['kode_penyakit'];
      $nama_penyakit             = $_POST['nama_penyakit'];
      $nilai                  = $_POST['nilai'];

        $sql = "INSERT INTO tb_penyakit values('$kode_penyakit', '$nama_penyakit', '$nilai')";

        $result = mysqli_query($db,$sql);
            echo '<script>alert("Data Berhasil Ditambahkan");document.location.href="tipe_bipolar.php";</script>';
        }else{
            echo '<script>alert("Data Gagal Ditambahkan");document.location.href="tipe_bipolar.php";</script> ';
        }
        ?>