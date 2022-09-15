<?php 

    include 'koneksi.php';
    
    if (isset($_POST['simpan'])) {

      $username                 = $_POST['username'];
      $nama              = $_POST['nama'];
      $role                  = $_POST['role'];
      $password                 = $_POST['password'];

        $sql = "INSERT INTO tb_user values('$username', '$nama', '$role','$password')";

        $result = mysqli_query($db,$sql);
            echo '<script>alert("Data Berhasil Ditambahkan");document.location.href="user_management.php";</script>';
        }else{
            echo '<script>alert("Data Gagal Ditambahkan");document.location.href="user_management.php";</script> ';
        }
        ?>