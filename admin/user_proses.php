<?php
include '../conn/koneksi.php';
	$nama = $_POST['nama'];
	$user = mysqli_real_escape_string($konek,$_POST['username']);
	$pass = mysqli_real_escape_string($konek,$_POST['password']);
	$pass = $_POST['password']; 
	$email = $_POST['email'];

 $input = mysqli_query($konek,"INSERT into tbl_user values('','$nama','$user','$pass','$email','$level')");
  
if ($input) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=user'>";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=user'>";	
}
?>
