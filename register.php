<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sistem Pakar Bipolar</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/alazea-gh-pages/img/core-img/iconn.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="assets/alazea-gh-pages/style.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">


</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="assets/alazea-gh-pages/img/core-img/iconn.png" alt="">
        </div>
    </div>
    <header class="header-area">
    </header>
    
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(assets/alazea-gh-pages/img/bg-img/bg12.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-50 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                           
                            <div class="hero-slides-content text-center">
                                <h2 style="padding-top:100px">Register</h2>
                                <div style="padding:30px 350px 200px 350px">
                                <?php
              include "koneksi.php";
              if (isset($_POST['register'])) {
                  //ambil data dari form   
                  $username=$_POST['username'];
                  $nama=$_POST['nama'];
                  $role=$_POST['role'];
                  $password=$_POST['password'];
                  $sql=mysqli_query($db,"SELECT * FROM tb_user WHERE username='".$username."'");
                  $cek=mysqli_num_rows($sql);
                  if ($cek>0) {
                    echo '<div class="alert alert-warning">
                            Email anda sudah pernah terdaftar!
                          </div>';
                  }else{
                    //jika data kosong maka insert ke tabel;
                    //aktif =0 user belum aktif
                    $insert=mysqli_query($db,"INSERT INTO tb_user(username,nama,role,password) VALUES('".$username."','".$nama."','".$role."','".$password."')");
                    //include kirim email
                    echo '<div class="alert alert-warning">
                    Anda berhasil Daftar!
                  </div>';

                  }                  
                }
            

            ?>
                                    <form action="" method="POST">
                                        <div class="row">
                                            <div class="col-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="username" class="form-control" id="contact-name" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="nama" class="form-control" id="contact-name" placeholder="Nama">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12" for="role">
                                                <div class="form-group">         
                                    <select class="form-control" name="role">
                                        <option value="user">User</option>
                                    </select>
                                    </div>
                                    </div>
                                            <div class="col-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control" id="contact-name" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="register" class="btn alazea-btn mt-15">Register</button>
                                                <br>
                                                <a href="login.php" style="color:white">kembali ke form login</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
   

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="assets/alazea-gh-pages/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="assets/alazea-gh-pages/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/alazea-gh-pages/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="assets/alazea-gh-pages/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="assets/alazea-gh-pages/js/active.js"></script>
</body>

</html>