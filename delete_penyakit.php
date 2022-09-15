<?php
    $kode_penyakit = $_GET['kode_penyakit'];
    session_start();
    include('koneksi.php');
    if($_SESSION['role']==""){
        header("location:login.php?pesan=Kamu blm login bestie");
      }
?>
<?php
    $sql = "DELETE FROM tb_penyakit where kode_penyakit='$kode_penyakit'";
    $query = mysqli_query($db, $sql) or die("SQL Anda Salah");
        if($query){
            echo"<script>   
            window.location.assign('tipe_bipolar.php');</script>";
        }else{
            echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('tipe_bipolar.php');</script>";
        }