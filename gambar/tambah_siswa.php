<body>
<style>
form{
    width: 400px;
    height: 500px;
    background-color: antiquewhite;
    text-align: center;
    border-radius: 15px;
}
form h2{
    padding-top: 20px;
}
h1{
    text-decoration: underline;
    padding-bottom: 20px;
}
</style>
<center>
    <h1>Tambah Siswa</h1>
    <form action="aksitambahsiswa.php" method="post" enctype="multipart/form-data">
        <h2>NIS/Username</h2>
        <input type="text" name="nis" required>
        <h2>Password</h2>
        <input type="password" name="password" required>
        <h2>Nama</h2>
        <input type="text" name="nama" required>
        <h2>Jurusan</h2>
        <select name="jurusan" id="jurusan">
        <option value="Pilih Jurusan" selected disabled>Pilih Jurusan</option>
        <option value="APH">APH</option>
        <option value="RPL">RPL</option>
        <option value="UPW">UPW</option>
        </select>
        <h2>Jenis Kelamin</h2>
        <select name="jkelamin" id="jkelamin">
        <option value="Pilih Jenis Kelamin" selected disabled>Pilih Jenis Kelamin</option>
        <option value="Laki Laki">Laki Laki</option>
        <option value="Perempuan">Perempuan</option>
        </select>
        <h2>Gambar</h2>
        <input type="file" name="gambar">
        <br>
        <br>
        <button type="submit">Tambah Data</button>
    </form>
    </center>
</body>