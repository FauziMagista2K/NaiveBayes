<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['user'];
$password = $_POST['pass'];


// menyeleksi data username dengan username dan password yang sesuai
$sql = mysqli_query($db,"select * from tb_user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($sql);

	// cek jika username login sebagai admin
	if($data['role']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:index.php");

	// cek jika username login sebagai pegawai
	}else if($data['role']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "user";
		// alihkan ke halaman dashboard pegawai
		header("location:index_us.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}

?>