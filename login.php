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
                <div class="slide-img bg-img" style="background-image: url(assets/alazea-gh-pages/img/bg-img/bg17.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-50 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2 style="padding-top:150px">Login SISTEM PAKAR BIPOLAR</h2>
                                <div style="padding:30px 200px 200px 200px">
                                    <form action="cek_login.php" method="post">
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="user" class="form-control" id="contact-name" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <input type="password" name="pass" class="form-control" id="contact-email" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="submit" class="btn alazea-btn mt-15">Login</button>
                                                <br>
                                                <a href="register.php" style="color:white">belum punya akun?</a>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
if(isset($_GET['pesan'])){
  
  session_start();
  include 'koneksi.php';
  if($_GET['pesan']=="gagal"){
    echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
  }

}
      //if(isset(($_POST['submit']))){
       // session_start();
       // include 'koneksi.php';

        //$user =mysqli_real_escape_string($db, $_POST['user']);
        //$pass =mysqli_real_escape_string($db,$_POST['pass']);

        //$cek = mysqli_query($db, "SELECT * FROM tb_user WHERE username = '".$user."' AND password = '" .$pass."'");
        //if (mysqli_num_rows($cek) > 0){
          //$d = mysqli_fetch_object($cek);
          //$_SESSION['status-login'] = true;
          //$_SESSION['a_global'] = $d;
          //$_SESSION['id'] = $d->nama;
         // echo '<script>window.location="beranda.php"</script>';
        //}else{
          //echo '<script>alert("Username atau password anda salah")</script>';
      //}
  //  }
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ##### Footer Area End ##### -->

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