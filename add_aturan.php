<?php 

include 'koneksi.php';

if (isset($_POST['simpan'])) {

    $kode_aturan            = $_POST['kode_aturan'];
    $kode_penyakit      = $_POST['kode_penyakit'];
    $kode_gejala        = $_POST['kode_gejala'];
    $nilai      = $_POST['nilai'];

    $sql = "INSERT INTO tb_aturan values('$kode_aturan','$kode_penyakit','$kode_gejala','$nilai')";

    $result = mysqli_query($db,$sql);
        echo '<script>alert("Data Berhasil Ditambahkan");document.location.href="aturan.php";</script>';
    }else{
        echo '<script>alert("Data Gagal Ditambahkan");document.location.href="aturan.php";</script> ';
    }
    ?>
    