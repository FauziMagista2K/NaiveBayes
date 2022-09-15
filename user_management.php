<?php
session_start();
include('koneksi.php'); 

if($_SESSION['role']==""){
  header("location:login.php?pesan=Login Dulu Ya Bestie!");
}
// if ($_SESSION['status-login'] != true) {
    // echo '<script>window.location="login.php"</script>';
  //}
?>
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

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!-- Login -->
                                <div class="login">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                               
                            </div>
                            <div class="top-header-meta d-flex">
                                <!-- Login -->
                                <div class="login">
                                <a href="logout.php"><i class="fa fa-user" ></i> <span>Logout</span></a>';
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Dashboard</a></li>
                                    <li><a href="info.php">Bipolar Disorder</a></li>
                                    <li><a href="gejala.php">Gejala</a></li>
                                    <li><a href="tipe_bipolar.php">Tipe Bipolar</a></li>
                                    <li><a href="aturan.php">Aturan</a></li>
                                    <li><a href="konsultasi.php">Konsultasi</a></li>
                                    <li><a href="user_management.php">User Management</a></li>
                                    </ul>
                                    
                                
                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(assets/alazea-gh-pages/img/bg-img/bg16.jpg);">
            <h2>USER MANAGEMENT</h2>
        </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <a href="#" data-toggle="modal" data-target="#modal_Add" class="btn btn-block btn-primary">
                                <i class="fa fa-plus"></i> Tambah Data
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tbody>
                                <tr>
                                    <th style="text-align: center; width: 1%;">No.</th>
                                    <th style="width: 5%;">Username</th>
                                    <th style="width: 5%;">Nama</th>
                                    <th style="width: 5%;">Role</th>
                                    <th style="width: 5%;">Password</th>
                                    <th style="text-align: center; width: 5%;">Aksi</th>
                                </tr>
                                <?php
                        
                        //buat sql untuk tampilan data, gunakan kata kunci select
                        $sql = "SELECT * FROM tb_user";
                        $query = mysqli_query($db, $sql) or die("SQL Anda Salah");
                        $nomor = 0;
                        //Melakukan perulangan u/menampilkan data
                        while ($data = mysqli_fetch_array($query)) {
                            $nomor++; //Penambahan satu untuk nilai var nomor
                            ?>
                            <tr>
                                <td><?= $nomor ?></td>									        
                                <td><?= $data['username'] ?> </td>
                                <td><?= $data['nama'] ?> </td>                          
                                <td><?= $data['role'] ?> </td>
                                <td><?= $data['password'] ?> </td>
                                <td>
                                    <a href="edit_user.php?username=<?= $data['username'] ?>" class="btn btn-primary btn-xs">
                                        <span class="fa fa-pencil"> Edit </span>
                                    </a>
                                    <a href="delete_user.php?username=<?= $data['username'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda Ingin Menghapus User?')">
                                        <span class="fa fa-edit"> Hapus </span>
                                    </a>
                                </td>
                            </tr>
                            <!--Tutup Perulangan data-->
                        <?php } ?>
                            </thead>
                            
                            
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modal_Add" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Tambah data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="POST" action="add_user.php">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Username</label>
                        <div class="col-sm-8">
                            <input type="type" required class="form-control"  name="username" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Nama</label>
                        <div class="col-sm-8">
                            <textarea name="nama" required class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group">
                 <label for="role">Role</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="role" id="customRadio1" value="admin" required>
                          <label for="customRadio1" class="custom-control-label">Admin</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="role" value="user" id="customRadio2" required>
                          <label for="customRadio2" class="custom-control-label">User</label>
                        </div>
                    </div>
                    </div>
                
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-8">
                            <textarea name="password" required class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- ##### Contact Area Info End ##### -->
    
   <!-- ##### Footer Area Start ##### -->
   <footer class="footer-area bg-img">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-4 col-lg-4">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>info Aplikasi</h5>
                            </div>
                            <nav class="widget-nav">
                                <p>Merupakan Sistem Pakar Diagnosa Awal Gangguan Bipolar yang dibangun dengan menggunakan metode Naive Bayes</p>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-4">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-4 col-lg-4">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>Kontak</h5>
                            </div>

                            <div class="Informasi Kontak">
                                <p><span>Alamat:</span> Kp. Parung Badak 2 No.7 Kabupaten Bogor</p>
                                <p><span>No. Telp:</span> 085156168504</p>
                                <p><span>Email:</span> rezanesha50@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                          <p> Copyright &copy; Reza Nesha 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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