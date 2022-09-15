<?php
    $kode_gejala = $_GET['kode_gejala'];
    session_start();
    include('koneksi.php');
    if($_SESSION['role']==""){
        header("location:login.php?pesan=Kamu blm login bestie");
      }
?>
<?php
    $sql = "DELETE FROM tb_gejala where kode_gejala='$kode_gejala'";
    $query = mysqli_query($db, $sql) or die("SQL Anda Salah");
        if($query){
            echo"<script>   
            window.location.assign('gejala.php');</script>";
        }else{
            echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('gejala.php');</script>";
        }