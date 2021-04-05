<?php
include "config/koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$jurusan = $_POST['jurusan'];
$jkelamin = $_POST['jkelamin'];

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

$path = "images/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file = "image/png"){
        if($ukuran_file <= 1000000){
                if(move_uploaded_file($tmp_file, $path)){
                        $sql = "INSERT INTO user (nis, password, nama, jurusan, jkelamin, mat, bi, bing, level) 
                        values ('$nis', '$password', '$nama', '$jurusan', '$jkelamin', '0', '0', '0', 'siswa')";
                                $query = mysqli_query($koneksi, $sql);

                if($query){
                        header("location:halaman_admin.php?hal=siswa&pesan=berhasil");
                }else{
                        header("location:halaman_admin.php?hal=siswa&pesan=gagal");
                }
                }
        }
}


?>

