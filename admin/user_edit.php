<?php 
include '../conn/koneksi.php';
$id = $_GET['id'];
$anggota=$konek->query ("SELECT * FROM tbl_user where id='$id'");
$data = mysqli_fetch_array($anggota);
$nama = $data['nama'];
$password = $data['password'];
$email = $data['email'];
?>
<!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Anggota
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Edit Anggota</td>
                </tr>
            </table>   
    	</div>
   	    <div class="table_input">
        <form action="?page=user_proses_edit" method="post">
          <input type="hidden" name="nim" size="50%" value="<?php echo $id; ?>"></td>
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
                <tr>
                	<td width="20%" align="right">Nama Lengkap</td>
                    <td><input type="text" name="nama" required="required" value="<?php echo $nama; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Password</td>
                    <td><input type="text" name="password" required="required" value="<?php echo $password; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Email</td>
                    <td><input type="text" name="email" required="required" value="<?php echo $email; ?>"></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><a href="?page=user">Kembali</td>
                </tr>
            
            </tbody>
          </table>
          </form>
 	      </div>
   	  </div>
    </div>