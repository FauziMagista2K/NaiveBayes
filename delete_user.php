<?php
    $username = $_GET['username'];
    session_start();
    include('koneksi.php');
    if($_SESSION['role']==""){
        header("location:login.php?pesan=Kamu blm login bestie");
      }
?>
<?php
    $sql = "DELETE FROM tb_user where username='$username'";
    $query = mysqli_query($db, $sql) or die("SQL Anda Salah");
        if($query){
            echo"<script>   
            window.location.assign('user_management.php');</script>";
        }else{
            echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('user_management.php');</script>";
        }