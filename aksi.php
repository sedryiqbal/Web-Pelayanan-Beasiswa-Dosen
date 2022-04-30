<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'helper/connection.php';
 
// berfungsi menangkap data yang dikirim
$user = $_POST['username'];
$pass = ($_POST['password']);
 
// berfungsi menyeleksi data user dengan username dan password yang sesuai
$sql = mysqli_query($connection,"SELECT * FROM tb_user WHERE username='$user' AND password='$pass'");
//berfungsi menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql);

// berfungsi mengecek apakah username dan password ada pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($sql);

	// berfungsi mengecek jika user login sebagai admin
	if($data['level']=="admin"){
		// berfungsi membuat session
		$_SESSION['nama'] =  $data['nama_lengkap'];
		$_SESSION['level'] = "admin";
		//berfungsi mengalihkan ke halaman admin
		header("location:admin/index.php");
	
	// berfungsi mengecek jika user login sebagai moderator
	}else if($data['level']=="user"){
		// berfungsi membuat session
		$_SESSION['nama'] = $data['nama_lengkap'];
		$_SESSION['level'] = "user";
		// berfungsi mengalihkan ke halaman moderator
		header("location:dashboard/index.php");

	}else{
		// berfungsi mengalihkan alihkan ke halaman login kembali
		header("location:index.php?alert=gagal");
	}	
}else{
	header("location:index.php?alert=gagal");
}
?>