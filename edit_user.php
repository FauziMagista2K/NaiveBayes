<?php
session_start();
include('koneksi.php');

if($_SESSION['role']==""){
  header("location:login.php?pesan=Kamu blm login bestie");
}
// if ($_SESSION['status-login'] != true) {
//     echo '<script>window.location="login.php"</script>';
//   }
?>

<?php
$username = $_GET['username'];
include('koneksi.php');
// if ($_SESSION['status-login'] != true) {
//     echo '<script>window.location="login.php"</script>';
//   }
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
    <header class="header-area">
    </header>
    
    <section class="hero-area">
       
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(assets/alazea-gh-pages/img/bg-img/bg12.jpg);"></div>
                <div class="container h-100">
                    <div class="row h-50 align-items-center">
                        <div class="col-12">
            
                            <div class="hero-slides-content text-center">
                                <h2 style="padding-top:100px">Edit Isi Dashboard</h2>
                                <div style="padding:30px 350px 200px 350px">
                                <?php
	include 'koneksi.php';
	$username = $_GET['username'];
	$sql = mysqli_query($db,"select * from tb_user where username='$username'");
	while($data = mysqli_fetch_array($sql)){
		?>
		<form method="POST" action="">
                                
                                        <div class="row">
                                            <div class="col-12 col-sm-12">
                                            <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>"><br>
                                            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>"> <br>
                                            <input type="text" class="form-control" name="role" value="<?php echo $data['role']; ?>" readonly><br>
                                            <input type="password" class="form-control" name="password" value="<?php echo $data['password']; ?>" readonly>
                                        </div>
                                            </div>
                                              <center>  
                                              <a href="user_management.php" name="submit" class="btn alazea-btn mt-15">Kembali</a>
                                              <button type="submit" name="submit" class="btn alazea-btn mt-15">Update Data</button>
                                            </center> 
                                                
                                    </form>
                                    
    <?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
if(isset($_POST['submit'])){
$username = $_POST['username'];
$nama = $_POST['nama'];
$role = $_POST['role'];
$password = $_POST['password'];
 
// update data ke database
$sql = mysqli_query($db,"update tb_user set username='$username', nama='$nama', role='$role', password='$password' where username='$username'")or die(mysqli_error($db));
 
  
if($sql){
    echo '<script>alert("Berhasil menyimpan data."); document.location="user_management.php?username='.$username.'";</script>';
  }else{
    echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
  }
}
?>
 
    
                                  
  </div><?php 
	}
	?>
</section>
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