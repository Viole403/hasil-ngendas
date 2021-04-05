<?php
include 'conn/koneksi.php';
if(isset($_POST['log'])) {
	$user = mysqli_real_escape_string($konek,$_POST['user']);
	$pass = mysqli_real_escape_string($konek,$_POST['pass']); 
	$pass = $_POST['pass'];
	$sql = mysqli_query($konek," SELECT * FROM tbl_user where username='$user' and password='$pass'");
	$data = mysqli_fetch_array($sql);
	$username = $data['username'];
	$nama = $data['nama'];
	$password = $data['password'];
	$level = $data['level'];
	

	if ($user==$username && $pass==$password) {
		session_start();
		$_SESSION['nama']=$nama;
		$_SESSION['level']=$level;
		if ($level=='admin') {
			// echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";
		}
		else {
			// echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=guest/index.php'>";
	
		}
	} else {
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
			echo "<script>alert('Username dan password anda salah, Silahkan login kembali !');</script>";
	}	
}

?>