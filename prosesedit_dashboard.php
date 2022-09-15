<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
if(isset($_POST['submit'])){
$kode_dashboard = $_POST['kode_dashboard'];
$nama_dashboard = $_POST['nama_dashboard'];

 
// update data ke database
$sql = mysqli_query($db,"update tb_dashboard set nama_dashboard='$nama_dashboard' where kode_dashboard='$kode_dashboard'")or die(mysqli_error($db));
 
  
if($sql){
    echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?kode_dashboard='.$kode_dashboard.'";</script>';
  }else{
    echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
  }
}
?>
 
