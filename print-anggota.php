<html>
<body onLoad="window.print();">

   <?php
   include 'conn/koneksi.php';
   ?>
   <style type="text/css">
body {
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
}
.style1{
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
}
</style>
<p align="center">LAPORAN DATA ANGGOTA PERPUSTAKAAN SMK 17 AGUSTUS 1945 SURABAYA</p>
   	      <table width="100%" cellspacing="0" cellpadding="2" border="1px" class="style1">
   	      
   	          <tr>
   	            <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">No</th>
   	            <th width="13%" align="center" class="style1" bgcolor="#CCCCCC">Nim</th>
   	            <th width="26%" align="center" class="style1" bgcolor="#CCCCCC">Nama</th>
                <th width="14%" align="center" class="style1" bgcolor="#CCCCCC">Tempat Lahir</th>
                <th width="11%" align="center" class="style1" bgcolor="#CCCCCC">Tgl Lahir</th>
                <th width="9%" align="center" class="style1" bgcolor="#CCCCCC">Jns Kelamin</th>
                <th width="14%" align="center" class="style1" bgcolor="#CCCCCC">Prodi</th>
   	            <th width="8%" align="center" class="style1" bgcolor="#CCCCCC">Thn Masuk</th>
              </tr>
          
        <?php $no=1;?>
        <?php $q_tampil_anggota=$konek->query ("SELECT * FROM tbl_anggota ORDER by nim");?>
        <?php while($data=$q_tampil_anggota->fetch_assoc()){?>
          
   	        <tbody>
   	          <tr>
   	            <td align="center"><?php echo $no; ?></td>
   	            <td ><?php echo $data['nim']; ?></td>
   	            <td ><?php echo $data['nama']; ?></td>
                <td align="center"><?php echo $data['tempat_lahir']; ?></td>
                <td align="center"><?php echo $data['tgl_lahir']; ?></td>
                <td align="center"><?php echo $data['jk']; ?></td>                
                <td align="center"><?php echo $data['prodi']; ?></td>
   	            <td align="center"><?php echo $data['thn_masuk']; ?></td>
                
              </tr>
              
            <?php $no++; } ?>
            
            </tbody>
          </table>
          
</body>
</html>