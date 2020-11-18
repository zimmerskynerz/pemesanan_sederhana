<?php
if (isset($_POST['login']))		{ 
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include 'koneksi.php';
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from tbl_user where username='$username' and password='$password' and status='ada'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	// cek jika user login sebagai admin
	if($data['level']=="ADMIN"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "ADMIN";
		// alihkan ke halaman dashboard admin
		header("location:../admin/");
	// cek jika user login sebagai pegawai
	}else if($data['level']=="PEMILIK"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "PEMILIK";
		// alihkan ke halaman dashboard pegawai
		header("location:../pemilik/");
	// cek jika user login sebagai pengurus
	}else if($data['level']=="KONSUMEN"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "KONSUMEN";
		// alihkan ke halaman dashboard pengurus
		header("location:../home");
	}else{
		// alihkan ke halaman login kembali
		header("location:../?pesan=gagal");
	}	
}else{
	header("location:../?pesan=gagal");
}
		}
?>
<?php
if (isset($_POST['loginMember']))	{ 
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include 'koneksi.php';
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from tbl_user where username='$username' and password='$password' and status='ada'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	// cek jika user login sebagai admin
	if($data['level']=="ADMIN"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "ADMIN";
		// alihkan ke halaman dashboard admin
		header("location:../admin/");
	// cek jika user login sebagai pegawai
	}else if($data['level']=="PEMILIK"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "PEMILIK";
		// alihkan ke halaman dashboard pegawai
		header("location:../pemilik/");
	// cek jika user login sebagai pengurus
	}else if($data['level']=="KONSUMEN"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "KONSUMEN";
		// alihkan ke halaman dashboard pengurus
		header("location:../home");
	}else{
		// alihkan ke halaman login kembali
		header("location:../?pesan=gagal");
	}	
}else{
	header("location:../?pesan=gagal");
}
		}
?>