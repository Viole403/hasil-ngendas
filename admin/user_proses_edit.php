<?php
include '../conn/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$pass = $_POST['password'];
$email = $_POST['email'];
	
	
$input = mysqli_query($konek"UPDATE tbl_user SET nama='$nama',
										password='$pass',
										email='$email'
										WHERE id='$id'");
if ($input) {
	// echo "<script> alert('Data berhasil Dirubah') </script>";
	// echo "<meta http-equiv='refresh' content='0; url=?page=user'>";	
	header('location: index.php');
}
else {
	// echo "<script> alert('Data Gagal dirubah') </script>";
	// echo "<meta http-equiv='refresh' content='0; url=?page=user'>";	
	header("location: koneksi.php");
}

?>